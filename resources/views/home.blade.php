@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section class="d-flex justify-content-center">
    <div class="container py-4 d-flex flex-column align-items-center justify-content-center">
      <div class="row row-cols-5 g-5">
        @forelse ($movies as $movie)
            <div class="col">
              <a href="#">
                <div class="card h-100 p-2">
                  <h2 class="text-center fs-2 text-success">{{$movie->title}}</h2>
                  <h3 class="text-center fs-5">{{$movie->original_title}}</h3>
                </div>
              </a>
            </div>
        @empty
          <div class="col-12">
            <div class="card">
              <h2 class="display-4 text-warning text-center">Movies not found!</h2>
            </div>
          </div>
        @endforelse
          </div>
    </div>
  </section>
@endsection
