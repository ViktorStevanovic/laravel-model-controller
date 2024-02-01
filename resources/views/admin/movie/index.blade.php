@extends('layouts.layout')

@section('main-content')
<h1 class="text-center p-5">
    Movies from my DB
</h1>
<section class="d-flex flex-wrap justify-content-center gap-3 container">
    @foreach ($movies as $movie)
    <div class="card" style="width: 18rem;">
        <div class="card-body ">
          <h4 class="card-title">{{$movie->title}}</h4>
          <h6 class="card-subtitle mb-4">{{$movie->original_title}}</h6>
          <p class="card-text">  Nationality: {{$movie->nationality}}</p>
          <p class="card-text">Movie date: {{$movie->date}}</p>
          <p class="card-text">Average vote: {{$movie->vote}}</p>
        </div>
      </div>
    @endforeach
</section>
@endsection