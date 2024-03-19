@extends('layouts.app')

@section('title', $movie->title)

@section('main-content')
  <section>
    {{-- page title --}}
    <h1 class="text-center mb-5">{{$movie->title}}</h1>
    <div class="container d-flex gap-3">
      {{-- placeholder image --}}
      <img src="https://picsum.photos/200/300" alt="placeholder image" class="border border-3 border-success">
      <div>
        {{-- movie title --}}
        <h2 class="text-danger">Title: {{$movie->title}}</h2>
        {{-- movie original title --}}
        <h3 class="fs-5">Original Title: {{$movie->original_title}}</h3>
        {{-- movie language --}}
        <h4 class="fs-6 text-capitalize">Language: {{$movie->nationality}}</h4>
        {{-- movie date --}}
        <h4 class="fs-6">Date: {{$movie->date}}</h4>
        {{-- movie rate --}}
        <h4 class="fs-6">Rate: {{$movie->vote}}</h4>
      </div>
    </div>
  </section>
@endsection
