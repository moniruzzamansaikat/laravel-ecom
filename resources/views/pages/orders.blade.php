<?php
$orders = [1];
?>

@extends('layout')
@section('page_content')

<h1 class="my-2">My Orders</h1>

@if(count($orders) > 0)
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
@else
<h2 class="text-danger">You don't have any order yet! <a href="/">Start Shopping!</a></h2>
@endif

@endsection
