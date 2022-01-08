<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function questionDetail($slug){
        $question = Question::where('slug',$slug)->with('comment.user','like','questionTag')->first();
        $question->is_like = $this->getLikeDetails($question->id)['is_like'];
        $question->like_count = $this->getLikeDetails($question->id)['like_count'];
        return Inertia::render('QuestionDetail',['question'=>$question]);
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
