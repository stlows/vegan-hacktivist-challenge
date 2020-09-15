@extends('layout')

@section('content')
<div></div>
<h1>{{$question->value}}</h1>
<a href="/">← return to Home</a>
<form action="/questions/{{$question->id}}/answers" method="POST">
  @csrf
  <div class="form-group my-5">
    <label for="value">Do you know the answer?</label>
    <div class="input-group mb-3">
      <textarea class="form-control" id="answer" name="value" rows="3">{{old('value')}}</textarea>

    </div>
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
      Answer</button>
    @error('value')
    <small class="form-text text-danger">{{$message}}</small>
    @enderror

  </div>
</form>
<hr>
<h2>Answers</h2>
<div class="list-group my-3">
  @foreach($question->answers as $answer)
  <li class="list-group-item">
    {{$answer->value}}
  </li>
  @endforeach
</div>
@endsection