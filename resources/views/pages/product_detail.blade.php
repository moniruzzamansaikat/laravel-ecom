@extends('layout')
@section('page_content')

<div class="container mt-3">
    <h1>{{$product -> title }}</h1>
    <img style="max-width: 200px" src="{{$product -> image }}" alt="{{$product -> title }}">
    <form action="cart" method="POST" class="mt-5">
        @csrf
        <input type="hidden" name="product_id" value="{{$product -> id}}">
        <button type="submit" class="btn btn-success btn-sm">Add To Cart</button>
    </form>
</div>

@endsection
