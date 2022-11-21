@extends('layouts/template')

@section('title', 'Publisher Detail')

@section('content')
  <section>
    <div class="bg-light text-center m-0 py-2 px-5">
      <h2 class="p-0 m-0">{{$publisher->name}}</h2>
      <p class="p-0 m-0"><b>Address -</b> {{$publisher->address}}</p>
      <p class="p-0 m-0"><b>Phone -</b> {{$publisher->phone}}</p>
      <p class="p-0 m-0"><b>Email -</b> {{$publisher->email}}</p>
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
