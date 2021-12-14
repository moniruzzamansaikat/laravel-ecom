@extends("layout")
@section('page_content')
<div id="homePageSlider" class="carousel carousel-dark slide main-slider" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homePageSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homePageSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homePageSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <a href="/orders" class="btn btn-warning btn-sm">Order Now</a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <a href="/orders" class="btn btn-warning btn-sm">Order Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <a href="/orders" class="btn btn-warning btn-sm">Order Now</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homePageSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homePageSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
