@extends('layouts/template')

@section('title', 'Publishers')

@section('content')
  <section>
    <div class="bg-light text-center">
      <h2 class="m-0 py-2 px-5">Publishers</h2>
    </div>
    <div class="d-flex flex-row flex-wrap list-container">
      @foreach ($publishers as $publisher)
        <div class="card card-custom m-3">
          <img src="/images/{{ $publisher->image }}" />
          <div class="card-body">
            <h3 class="card-title">{{ $publisher->name }}</h3>
            <p class="card-text"><br>{{ $publisher->address }}</p>
            <a href="/publisher/{{ $publisher->id }}"><button class="btn btn-primary">Detail</button></a>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
