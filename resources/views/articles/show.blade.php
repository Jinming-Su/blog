@extends('layout/reference')

@section('head')
    <title>{{$article->title}}</title>
    <style>
        .content {
            padding-top: 80px;
        }
        .articles_index_panel {
            width: 70%;
            margin: 0 auto;
            margin-top: 20px;
        }
    </style>
    <script type="text/javascript">
        $(function() {
            $('#article').addClass('active');
        })
    </script>
@stop

@section('body')

    @include('layout/header')

    <div class="content">
        <div class="panel panel-info articles_index_panel">
            <div class="panel-heading">
                {{$article->title}}
                <a href="/article/{{$article->id}}/edit" class="btn btn-primary pull-right">Edit</a>
            </div>
            <div class="panel-body">{{$article->content}}</div>
            <div class="panel-footer">{{$article->created_at}}</div>
        </div>
    </div>

    @include('layout/footer')

@stop