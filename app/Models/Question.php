<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','slug','title','description'];

    public function comment(){
        return $this->hasMany(QuestionComment::class,'question_id');
    }

    public function like(){
        return $this->hasMany(QuestionLike::class,'question_id');
    }

    public function questionSave(){
        return $this->hasMany(QuestionSave::class,'question_id');
    }

    public function questionTag(){
        return $this->belongsToMany(Tag::class,'question_tags');
    }
}
