<?php

namespace App\Traits;

use App\Models\QuestionLike;
use App\Models\QuestionSave;
use App\Models\QuestionTag;
use Illuminate\Support\Facades\Auth;

trait Questions
{
    public  function getLikeDetails($id){
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

    public function getSaveDetails($id){
        $q_save = QuestionSave::where('question_id',$id)
                    ->where('user_id',Auth::user()->id)
                    ->first();
        if ($q_save){
            $is_save = 'true';
        }else{
            $is_save = 'false';
        }

        $data['is_save'] = $is_save;
        return $data;
    }
}
