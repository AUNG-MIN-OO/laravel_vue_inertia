<?php

namespace App\Traits;

use App\Models\QuestionLike;
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
}
