@extends('layout')
@section('page_content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="row">
                    <div class="col-md-4">
                        <img style="max-width: 200px" src="{{$product -> image }}" alt="{{$product -> title }}">
                    </div>
                    <div class="col-md-8">
                        <h2>{{$product -> title }}</h2>
                        <p>Category : Books</p>
                        <p>Price    : TK {{$product -> price }}</p>
                        <p>
                            {{$product -> description}}
                        </p>
                        <form action="cart" method="POST" class="mt-2">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product -> id}}">
                            <button type="submit" class="btn btn-success btn-sm">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="background: #fff;">
            <p>
                <p><i class="fas fa-money-bill-wave me-2 text-secondary"></i> Cash On Delivery</p>
                <p><i class="fas fa-circle-notch me-2 text-secondary"></i> 7 Days Happy Return</p>
                <p><i class="far fa-check-circle text-success me-2"></i> Purchase & Earn</p>
            </p>
        </div>
    </div>

    {{View::make("shared.reviews")}}
</div>

@endsection
