@extends('layout/reference')

@section('head')
    <title>Create</title>
    <style>
        .content {
            padding-top: 80px;
        }
        .container {
            width: 1000px;
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
        <div class="container">
            <form action="/article" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" rows="8" class="form-control"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-info form-control">
            </form>
            <div class="form_warning">
            @if($errors->any())
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            </div>
        </div>
    </div>

    @include('layout/footer')
@stop