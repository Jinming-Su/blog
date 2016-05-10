@extends('layout/reference')

@section('head')
    <title>Login</title>
    <style>
        body,.content{
            background-color: #d2d6de;
        }
    </style>
@stop

@section('body')

    <div class="content">
        <div class="signin_box">
            <p class="signin_box_msg">Sign in to start your code</p>
            <form action="/auth/login" method="POST">
                {{csrf_field()}}
                <div class="form-group signin_box_userbox">
                        <span class="glyphicon glyphicon-user signin_box_gly"></span>
                        <input type="email" name="email" class="form-control signin_box_user" placeholder="email" tabindex="1">
                    </div>
                <div class="form-group signin_box_userbox ">
                        <span class="glyphicon glyphicon-lock signin_box_gly"></span>
                        <input type="password" name="password" class="form-control signin_box_user" placeholder="password" tabindex="2">
                    </div>
                <div class="row signin_box_row signin_box_warning">
                        @if(count($errors) > 0 )
                                <span class="label label-danger" style="font-size: 12px"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp;{{$errors->all()[0]}}</span>
                            @elseif(isset($loginError))
                                <span class="label label-danger" style="font-size: 12px"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp;{{ $loginError }}</span>
                            @endif
                </div>
                <div class="row signin_box_row">
                        <input type="submit" value="Sign in" style="padding-top: 3px" class="btn btn-info pull-right">
                </div>
            </form>
            <br>
            <div class="row signin_box_row">
                    <a href="#" class="pull-left">I forget my password</a>
                    <br/>
                    <a href="/auth/register" class="pull-left">Register a new membership</a>
            </div>
        </div>
    </div>

@stop