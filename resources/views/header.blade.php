<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(session()->has('user')){
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">SmallShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ordernow">Orders</a>
        </li>
        <li></li>
        <li class="nav-item navbar-dark bg-dark" >
            <a class="nav-link" href="cartlist">Cart({{$total}})</a>
        </li>

        @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Log Out</a>
              </div>

            </li>
        @else
        <li class="nav-item navbar-dark bg-dark" >
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item navbar-dark bg-dark" >
            <a class="nav-link" href="/register">Sign up</a>
        </li>

        @endif
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
