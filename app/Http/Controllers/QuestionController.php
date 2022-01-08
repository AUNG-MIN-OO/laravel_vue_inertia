<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuestionController extends Controller
{
    public function questionDetail(){
//        $question = Question::findOrFail($id);
        return Inertia::render('QuestionDetail');
    }
}
