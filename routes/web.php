<?php

use Illuminate\Support\Facades\Route;
use App\Models\Question;
use App\Http\Controllers\QuestionsController;

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
  $question = 'Why do humans drink cow\'s milk?';
  $questions = Question::latest()->paginate(5);
  return view('welcome', [
    'question' => $question,
    'questions' => $questions
  ]);
});

Route::get('/questions', [QuestionsController::class, 'index'])->name('questions.index');
Route::get('/questions/{question}', [QuestionsController::class, 'show'])->name('questions.show');
Route::post('/questions', [QuestionsController::class, 'store']);
