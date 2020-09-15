<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Http\Requests\StoreAnswer;

class AnswersController extends Controller
{
    public function store(Question $question, StoreAnswer $request)
    {
      $answer = new Answer($request->validated());
      $answer->question_id = $question->id;
      $answer->save();

      return redirect($question->path());
    }
}
