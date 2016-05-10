@extends('layout/reference')

@section('head')
    <title>{{$user->name}}</title>
    <style>
        .container1 {
            width: 1000px;
        }
        .panel1 {
            background-color: #d9edf7;
        }
        hr {
            border: 1px solid #31708f;
        }
        .panel2 {
            margin-left: 20px;
            background-color: #f2dede;
        }
    </style>
@stop

@section('body')

    @include('layout/header')

    <div class="content">
        <div class="container container1">
            <div class="col-md-4 panel panel-default panel1">
                <div class="panel-body">
                    @if(isset($user))
                        <label>Username: {{$user->name}}&nbsp;&nbsp;&nbsp;<a href="#" class="text-danger">+<i class="fa fa-heart"></i></a></label>
                        <hr>
                        <label>Email: {{$user->email}}</label>
                    @else
                        <span>Nobody.</span>
                    @endif
                </div>
            </div>
            <div class="col-md-7 panel panel-default panel2">
                <div class="panel-body">
                    @if(count($articles) == 0)
                        <span>Nothing.</span>
                    @else
                        @foreach($articles as $article)
                            <a class="btn btn-default">{{$article->title}}</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('layout/footer')

@stop