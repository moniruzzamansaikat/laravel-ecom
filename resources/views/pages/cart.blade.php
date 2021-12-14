@extends('layout')

@section('page_content')
<div class="mb-3">
    <h1 class="my-3 display-4">My Cart</h1>
    <a href="/shipping" class="btn btn-success mb-4">Go to shipping page</a>
</div>

<div class="row">
@foreach ($carts as $cart)
<div class="my-3">
    <div class="row">
        <div class="col-md-3">
            <img src="{{$cart -> image}}" alt="" style="max-width: 200px">
        </div>
        <div class="col-md-9">
            <h2>{{$cart -> title }}</h2>
            <p><strong>Price: </strong> {{$cart -> price }} $</p>
            <form action="/cart/remove" method="POST">
                @csrf
                <input type="hidden" name="cart_id" value="{{$cart -> cart_id}}">
                <button type="submit" class="btn btn-danger btn-sm">Remove from cart</button>
            </form>
        </div>
    </div>

</div>
@endforeach
</div>


@endsection
