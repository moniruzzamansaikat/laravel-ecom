@extends('layout')
@section('page_content')

<div class="container-fluid">
    <div class="row my-4">
        <div class="col-sm-3 offset-sm-4">
            <form action="login" method="POST">
                <div class="mb-3">
                    @csrf
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input tabindex="1" type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password address</label>
                    <input tabindex="2" type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
