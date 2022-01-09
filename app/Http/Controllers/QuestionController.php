<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionComment;
use App\Models\QuestionLike;
use App\Models\QuestionTag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Inertia\Inertia;
use App\Traits\Questions as QuestionTraits;

class QuestionController extends Controller
{
    use QuestionTraits;
    public function home(){
        $questions = Question::with('comment','questionTag','questionSave')->get();
        foreach ($questions as $key=>$value){
            $questions[$key]->is_like = $this->getLikeDetails($value->id)['is_like'];
            $questions[$key]->like_count = $this->getLikeDetails($value->id)['like_count'];
        }
        return Inertia::render('Home',['questions'=>$questions]);
    }

    public function showQuestion(){
        return Inertia::render('CreateQuestion');
    }

    public function storeQuestion(Request $request){
//        $a=array();
//        for($i=0; $i<strlen($request->tags); $i++)
//            $a[$i] = $request->tags[$i];
//        foreach ($a as $b){
//            if ($b != ','){
//                return true;
//            }
//        }
//        die();

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

    public function questionDetail($slug){
        $question = Question::where('slug',$slug)->with('comment.user','like','questionTag')->first();
        $question->is_like = $this->getLikeDetails($question->id)['is_like'];
        $question->like_count = $this->getLikeDetails($question->id)['like_count'];
        return Inertia::render('QuestionDetail',['question'=>$question]);
    }

    public function userQuestion(){
        $user = User::findOrFail(Auth::user()->id);
        $question = $user->question;
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
