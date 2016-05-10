@extends('layout/reference')

@section('head')
    <title>Article</title>
    <style>
        .table {
            width: 900px;
            margin: 0;
            margin-left: 10%;
            table-layout: fixed;
        }
        .table > thead > tr > th,
        .table > tbody > tr > th,
        .table > tfoot > tr > th,
        .table > thead > tr > td,
        .table > tbody > tr > td,
        .table > tfoot > tr > td {
            padding: 5px;
        }
        .table thead {
            background-color: #d2d6de;
            opacity: 0.8;
        }
    </style>
    <script>
        $(function() {
            $('#article').addClass('active');
        })
    </script>
@stop

@section('body')

    @include('layout/header')

    <div class="content">
        <div class="table-responsive col-md-10">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <td class="text-center" style="width: 15%">Title</td>
                        <td class="text-center" style="width: 20%">Keyword</td>
                        <td class="text-center" style="width: 30%">Created_at</td>
                        <td class="text-center" style="width: 20%">Author</td>
                    </tr>
                </thead>
                @foreach($articles as $article)
                    <tr>
                        <td class="text-center my_ellipsis">
                            <a href="/article/{{$article->id}}">{{$article->title}}</a>
                        </td>
                        <td class="text-center my_ellipsis">{{$article->key_word}}</td>
                        <td class="text-center">{{$article->created_at}}</td>
                        <td class="text-center my_ellipsis">
                            <a href="/profile/{{$article->user->id}}">{{$article->user->name}}</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-2">
            @if(Auth::guest())
                <a>Login has more rights</a>
            @else
                <a href="/article/create" class="btn btn-info"><i class="fa fa-file-text-o"></i> New Article</a>
            @endif
        </div>
        <div class="clear_both"></div>
    </div>

    @include('layout/footer')

@stop