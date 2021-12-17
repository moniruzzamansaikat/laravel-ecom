<?php
use App\Http\Controllers\UserController;
$orders = UserController::getOrders();
?>

@extends('layout')
@section('page_content')

<h1 class="my-2">My Orders</h1>

@if(count($orders) > 0)
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Total Products</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
    <tr>
      <th scope="row">1</th>
      <td>{{$order -> products_count}}</td>
      <td>{{$order -> price }}</td>
      <td>{{$order -> status}}</td>
      <td>{{$order -> address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<h2 class="text-danger">You don't have any order yet! <a href="/">Start Shopping!</a></h2>
@endif

@endsection
