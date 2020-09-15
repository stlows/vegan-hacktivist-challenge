@extends('layout')

@section('content')
<div class="mt-5">
  <h1 class="display-2-md display-4 my-5">Veganism Q&A</h1>
  <form action="/questions" method="POST">
    @csrf
    <div class="form-group my-5">
      <label for="question">Start by entering a question...</label>
      <div class="input-group mb-3">
        <input type="text" name="value" class="form-control" placeholder="{{ $sampleQuestion }}"
          aria-label="{{$sampleQuestion}}" aria-describedby="button-addon2" value="{{ old('value') }}">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
            Ask <svg class="ml-1" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
              <path fill-rule="evenodd"
                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
            </svg></button>
        </div>
      </div>
      @error('value')
      <small class="form-text text-danger">{{$message}}</small>
      @enderror

    </div>
  </form>


  <hr>
  <div>

  </div>
  <div class="my-4">
    <h2 class="mb-3">Questions</h2>
    <p class="text-muted">From newest to oldest</p>
    <div class="list-group my-3">
      @forelse($questions as $q)
      <a class="list-group-item list-group-item-action" href="{{ route('questions.show', $q->id) }}">
        <div class="d-flex justify-content-between align-items-center">
          {{$q->value}}
          <span class="badge badge-primary badge-pill">{{$q->answers->count()}} answers</span>
        </div>
        <div class="mt-1 text-right"><i>Created at: {{$q->created_at}}</i></div>

      </a>
      </a>

      @empty
      <p>No questions here yet...</p>
      @endforelse
    </div>
    {{ $questions->links() }}
  </div>

</div>
@endsection