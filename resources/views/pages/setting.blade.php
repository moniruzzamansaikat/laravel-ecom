@extends('layout')
@section('page_content')

<div class="container mt-3">
    <h1>Update your profile</h1>
    <form action="/user/setting">
        <div class="form-group my-3">
            <label for="name">Full name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="name">Email address</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="name">Password</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

</div>

@endsection
