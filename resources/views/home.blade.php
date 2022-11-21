@extends('layouts/template')

@section('title', 'Home')

@section('content')
  <section>
    <div class="bg-light text-center">
      <h2 class="m-0 py-2 px-5">Book List</h2>
    </div>
    <div class="d-flex flex-row flex-wrap list-container">
      @foreach ($books as $book)
        <div class="card card-custom m-3">
          <img src="/images/{{ $book->image }}" />
          <div class="card-body">
            <h3 class="card-title">{{ $book->title }}</h3>
            <p class="card-text">by<br>{{ $book->author }}</p>
            <a href="/book/{{ $book->id }}"><button class="btn btn-primary">Detail</button></a>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
