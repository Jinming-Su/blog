@extends('layout/reference')

@section('head')
    <title>Profile</title>
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
                    <label>Username: {{Auth::user()->name}}</label>
                    <hr>
                    <label>Email: {{Auth::user()->email}}</label>
                </div>
            </div>
            <div class="col-md-7 panel panel-default panel2">
                <div class="panel-body">
                    @if(count($articles) == 0)
                        <span>You are too lazy.</span>
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