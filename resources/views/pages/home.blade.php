@extends("layout")
@section('page_content')
<h2 class="mt-2">Products</h2>
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-3 my-3">
        <div class="card">
            <img src="{{$product -> image }}" class="card-img-top" alt="{{$product -> image }}" style="max-height: 300px">
            <div class="card-body">
                <h5 class="card-title">{{$product -> title }}</h5>
                <p class="card-text">
                    <strong>Price: </strong> <span>{{$product -> price }}$</span>
                </p>
                <a href="/orders" class="btn btn-warning btn-sm">Order Now</a>
                <form action="cart" method="POST" class="float-end ms-2">
                     @csrf
                    <input type="hidden" name="product_id" value="{{$product -> id}}">
                    <button type="submit" class="btn btn-info btn-sm">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
