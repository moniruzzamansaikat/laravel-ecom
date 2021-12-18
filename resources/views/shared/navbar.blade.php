<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItemsCount();
}
?>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img class="logo" src="/images/logo.png" alt="">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarColor01" style="">
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orders">Orders</a>
        </li>
      </ul> -->

      <ul class="navbar-nav ms-auto d-flex align-items-center">
        @if(Session::has('user'))
          <li class="dropdown">
            <button class="btn btn-secondary btn-sm me-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <a class="text-white">{{Session::get('user')['name']}}</a>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="/cart">Cart({{$total}})</a></li>
              <li><a class="dropdown-item" href="/orders">Orders</a></li>
              <li><a class="dropdown-item" href="/setting">Setting</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        @else
          <a href="/login" class="nav-right-menu-item">
            <i class="fa fa-user"></i>
            <span>Sign in</span>
          </a>

          <a href="/orders" class="nav-right-menu-item">
            <i class="fas fa-shopping-basket "></i>
            <span>Orders</span>
          </a>

          <a href="/cart" class="nav-right-menu-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Cart</span>
          </a>
        @endif
        </li>
      </ul>
    </div>

  </div>
</nav>
