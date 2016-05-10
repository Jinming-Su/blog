@extends('layout/reference')

@section('head')
    <title>{{$article->title}}</title>
    <style>
        .articles_index_panel {
            width: 70%;
            margin: 0 auto;
            margin-top: 20px;
        }
        .content {
            min-height: 650px;
            padding-bottom: 100px;
        }
        .panel-heading {
            font-size: 25px;
            font-style: oblique;
        }
        .panel-body {
            font-style: oblique;
        }
        .panel-footer {
            font-size: 13px;
            text-align: right;
        }
        .article_show_edit_btn {
            margin-top: 5px;
            padding: 5px 15px;
        }
    </style>
@stop
@section('body')
    <div class="content">
        <div class="panel panel-default articles_index_panel">
            <div class="panel-heading">
                <b>{{$article->title}}</b>
                @if(!Auth::guest())
                    <a href="/article/{{$article->id}}/edit" class="btn btn-warning pull-right article_show_edit_btn">Edit</a>
                @endif
            </div>
            <div class="panel-body">{{$article->content}}</div>
            <div class="panel-footer">{{$article->created_at}}</div>
        </div>
    </div>
@stop