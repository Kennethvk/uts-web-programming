<?php
$categories = DB::table('categories')
    ->select()
    ->get();
?>

<header>
  <div class="m-0">
    <h1 class="m-0 p-3 bg-dark text-center text-white">Giant Book Supplier</h1>
  </div>
  <div class="d-flex justify-content-xl-center bg-secondary text-white nav-container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/publisher">Publisher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
