<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionComment;
use App\Models\QuestionLike;
use App\Models\QuestionSave;
use App\Models\QuestionTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Inertia\Inertia;
use App\Traits\Questions as QuestionTraits;

class QuestionController extends Controller
{
    use QuestionTraits;
    public function home(Request $request){
        if ($slug = $request->tag){
            $questions = Tag::where('slug',$slug)->first()->question()->with('comment','questionTag','questionSave')->orderBy('id','DESC')->paginate(2);
        }elseif  ($type = $request->type){
            if  ($type == "answer"){
                $questions = Question::whereHas('comment',function (Builder $q){
                    $q->where('user_id',Auth::user()->id);
                })->with('comment','questiontag','questionsave')->paginate(2);
            }

            if  ($type == "unanswered"){
                $questions = Question::has('comment','<',1)->with('comment','questiontag','questionsave')->paginate(2);
            }
        }else{
            $questions = Question::with('comment','questionTag','questionSave')->orderBy('id','DESC')->paginate(2);
        }
        foreach ($questions as $key=>$value){
            $questions[$key]->is_like = $this->getLikeDetails($value->id)['is_like'];
            $questions[$key]->like_count = $this->getLikeDetails($value->id)['like_count'];
            $questions[$key]->is_save = $this->getSaveDetails($value->id)['is_save'];
        }

        return Inertia::render('Home',['questions'=>$questions]);
    }

    public function showQuestion(){
        return Inertia::render('CreateQuestion');
    }

    public function storeQuestion(Request $request){

        $question = Question::create([
            'user_id' => Auth::user()->id,
            'title'=>$request->title,
            'description'=>$request->description,
            'slug' => Str::slug($request->title)
        ]);
        $a=array();
        for($i=0; $i<strlen($request->tags); $i++)
            $a[$i] = $request->tags[$i];
        foreach ($a as $e){
            if ($e != ','){
                QuestionTag::create([
                    'question_id' => $question->id,
                    'tag_id' => $e,
                ]);
            }
        }

        $created_question = Question::where('id',$question->id)->with('questionTag')->get();

        return ['success'=>true,'question',$created_question];
    }

    public function deleteQuestion($id){
        Question::where('id',$id)->delete();
        return response()->json(['success'=>true]);
    }

    public function setFixed(Request $request){
        $id = $request->id;
        Question::where('id',$id)->update(['is_fixed'=>true]);
        return response()->json(['success'=>true]);
    }

    public function questionDetail($slug){
        $question = Question::where('slug',$slug)->with('comment.user','like','questionTag')->first();
        $question->is_like = $this->getLikeDetails($question->id)['is_like'];
        $question->like_count = $this->getLikeDetails($question->id)['like_count'];
        return Inertia::render('QuestionDetail',['question'=>$question]);
    }

    public function saveQuestion($id){
        QuestionSave::create([
            'question_id' => $id,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json(['success'=>true]);
    }

    public function showSavedQuestion(){
        $questions = QuestionSave::where('user_id',Auth::id())->with('question')->orderBy('id','DESC')->paginate(2);
        return Inertia::render('SavedQuestion',['questions'=>$questions]);
    }

    public function removeSavedQuestion($id){
        $question = QuestionSave::where('question_id',$id)->delete();

        return response()->json(['success'=>true]);
    }

    public function userQuestion(){
        $user = User::find(Auth::user()->id)->id;
        $question = Question::where('user_id',$user)->paginate(5);
        return Inertia::render('UserQuestion',['questions'=>$question]);
    }

    ##like
    public function like($id){
        QuestionLike::create([
            'user_id' => Auth::user()->id,
            'question_id' => $id,
        ]);
        return response()->json(['success'=>true]);
    }

    ##create comment
    public function createComment(Request $request){
        $q_id = $request->question_id;
        $comment = $request->comment;

        $cmt = QuestionComment::create([
            'question_id' => $q_id,
            'comment' => $comment,
            'user_id' => Auth::user()->id,
        ]);

        $createdComment = QuestionComment::where('id',$cmt->id)->with('user')->first();

        return ['success'=>true, 'comment'=>$createdComment];
    }
}
