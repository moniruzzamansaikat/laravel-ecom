@extends('layout')
@section('page_content')

<div class="container mt-3">
    <h1>Update your profile</h1>
    <form action="/setting" method="POST">
        @csrf
        <div class="form-group my-3">
            <label for="name">Full name</label>
            <input type="text" name="name" id="name" class="form-control" tabindex="1">
        </div>
        <div class="form-group my-3">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" class="form-control" tabindex="2">
        </div>
        <div class="form-group my-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" tabindex="3">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

</div>

@endsection
