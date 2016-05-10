@extends('layout/reference')

@section('head')
    <title>Register</title>
    <style>
        .container1 {
            width: 500px;
        }
    </style>
@stop

@section('body')

    @include('layout/header')

    <div class="content">
        <div class="container container1">
            <form action="/auth/register" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password Confirmation:</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <input type="submit" value="Register" class="btn btn-success form-control">
            </form>
        </div>
    </div>

    @include('layout/footer')

@stop