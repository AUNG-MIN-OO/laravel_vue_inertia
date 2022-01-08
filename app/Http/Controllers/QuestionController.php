<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class QuestionController extends Controller
{
    public function home(){
        $questions = Question::with('comment','questionTag','questionSave')->get();
        foreach ($questions as $key=>$value){
            $questions[$key]->is_like = $this->likeDetail($value->id)['is_like'];
            $questions[$key]->like_count = $this->likeDetail($value->id)['like_count'];
        }
        return Inertia::render('Home',['questions'=>$questions]);
    }

    public function questionDetail(){
//        $question = Question::findOrFail($id);
        return Inertia::render('QuestionDetail');
    }

    public function likeDetail($id){
        $q_like = QuestionLike::where('question_id',$id)
                    ->where('user_id',Auth::user()->id)
                    ->first();
        if ($q_like){
            $is_like = 'true';
        }else{
            $is_like = 'false';
        }

        ##like count
        $like_count = QuestionLike::where('question_id',$id)->count();
        $data['like_count'] = $like_count;
        $data['is_like'] = $is_like;
        return $data;
    }

    ##like
    public function like($id){
        QuestionLike::create([
            'user_id' => Auth::user()->id,
            'question_id' => $id,
        ]);
        return response()->json(['success'=>true]);
    }
}
