@extends('layouts/template')

@section('title', 'Book Detail')

@section('content')
  <section>
    <div class="bg-light">
      <h2 class="m-0 py-2 px-5">Book Detail</h2>
    </div>
    <div class="py-2 px-5 book-detail">
      <img src="/images/{{ $book->image }}"/>
      <div>
        <p class="my-1"><b>Title:</b> {{ $book->title }}</p>
        <p class="my-1"><b>Author:</b> {{ $book->author }}</p>
        <p class="my-1"><b>Publisher:</b> {{ $book->publisher->name }}</p>
        <p class="my-1"><b>Year:</b> {{ $book->year }}</p>
        <p class="my-1"><b>Synopsis:</b></p>
        <p class="my-1">{{ $book->synopsis }}</p>
      </div>
    </div>
  </section>
@endsection
