@extends('layout/reference')

@section('head')
    <title>Article</title>
    <style>
        .content {
            padding-top: 80px;
        }
        .table {
            width: 900px;
            margin: 0;
            margin-left: 10%;
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
                    <td>Title</td>
                    <td>Keyword</td>
                    <td>Created_at</td>
                </tr>
                </thead>
                @foreach($articles as $article)
                    <tr>
                        <td>
                            <a href="/article/{{$article->id}}">{{$article->title}}</a>
                        </td>
                        <td>{{$article->content}}</td>
                        <td>{{$article->created_at}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-2">
            <a href="/article/create" class="btn btn-info">+New Article</a>
        </div>
        <div class="clear_both"></div>
    </div>

    @include('layout/footer')

@stop