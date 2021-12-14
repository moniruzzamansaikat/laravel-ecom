<?php
use App\Http\Controllers\ProductController;

$shipping_charge = 10;
$total_price = ProductController::getTotalPrice();
?>

@extends('layout')
@section('page_content')
    <div class="container">
        <h1 class="mb-3 mt-4">Shipping page</h1>
        <div class="row">
            <div class="col-md-8">
                <form action="/shipping" method="POST">
                    <div class="form-group">
                        @csrf
                    </div>
                    <div class="form-group">
                        <textarea
                            name="address"
                            id="address"
                            class="form-control"
                            placeholder="Please enter your address here.."
                            required
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <h4 class="mt-3 mb-2 d-block">Payment Method</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Paypal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash on delivary
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-success mt-3" href="/">Confirm Order</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Checkout Summery</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Shipping</th>
                                <td>{{$shipping_charge}} $</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{$total_price}} $</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{$total_price + $shipping_charge}} $</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
