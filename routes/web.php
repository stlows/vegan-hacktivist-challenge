<?php

use Illuminate\Support\Facades\Route;
use App\Models\Question;
use App\Models\ExampleQuestion;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AnswersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
  $sampleQuestion = ExampleQuestion::all()->random();
  $questions = Question::latest()->paginate(5);
  return view('welcome', [
    'sampleQuestion' => $sampleQuestion->value,
    'questions' => $questions
  ]);
});

Route::get('/questions', [QuestionsController::class, 'index'])->name('questions.index');
Route::get('/questions/{question}', [QuestionsController::class, 'show'])->name('questions.show');
Route::post('/questions', [QuestionsController::class, 'store']);
Route::post('/questions/{question}/answers', [AnswersController::class, 'store']);
