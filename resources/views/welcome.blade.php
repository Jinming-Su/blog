@extends('layout/reference')

@section('head')
    <title>SJMING</title>
    <style>
        .cards {
            height: 370px;
            width: 100%;
        }
        .card {
            width:30%;
            height: 350px;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 2.5%;
            padding-left: 4px;
            padding-right: 4px;

            border-color: #d2d6de;
            border-style: solid;
            border-width: 1px;
            border-radius: 3px !important;
            background-color: white;
        }
        .container {
            width: 1100px;
        }
        h4 {
            padding: 20px 0;
        }
        .card_content a {
            font-size: 15px;
        }
        .card_content p{
            font-size: 13px;
        }
        .card_extra p{
            font-size: 13px;
            padding-right: 5px;
        }
    </style>
    <script type="text/javascript">
        $(function() {
            $("#project").addClass('active');
        })
    </script>
@stop

@section('body')

    @include('layout/header')

    <div class="content">
        <h4 class="text-center">Just do IT</h4>
        <div class="container">
            <div class="cards">
                <div class="card pull-left">
                    <div class="card_img">
                        <img src="/img/image/c.jpg" width="100%" height="215px">
                    </div>
                    <div class="card_content">
                        <a>Linux C Programming</a>
                        <p>
                            High-level procedural computer programming language with many low-level features, including the ability to handle memory addresses and Bits.
                        </p>
                    </div>
                    <hr>
                    <div class="card_extra pull-right">
                        <p>0 articles</p>
                    </div>
                </div>
                <div class="card pull-left">
                    <div class="card_img">
                        <img src="/img/image/frontend.png" width="100%" height="215px">
                    </div>
                    <div class="card_content">
                        <a>Html+css+js</a>
                        <p>
                            Become a Front-End Web Developer by completing a variety of projects for your portfolio - become an HTML, CSS and JavaScript pro!
                        </p>
                    </div>
                    <hr>
                    <div class="card_extra pull-right">
                        <p>0 articles</p>
                    </div>
                </div>
                <div class="card pull-left">
                    <div class="card_img">
                        <img src="/img/image/php.jpg" width="100%" height="215px">
                    </div>
                    <div class="card_content">
                        <a>PHP for backend</a>
                        <p>
                            PHP is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.
                        </p>
                    </div>
                    <hr>
                    <div class="card_extra pull-right">
                        <p>0 articles</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cards">
                <div class="card pull-left">
                    <div class="card_img">
                        <img src="/img/image/python.jpg" width="100%" height="215px">
                    </div>
                    <div class="card_content">
                        <a>Python(especially spider)</a>
                        <p>
                            Python is an easy and powerful programming language.It has  efﬁcient high-level data structures and effective approach to object-oriented programming.
                        </p>
                    </div>
                    <hr>
                    <div class="card_extra pull-right">
                        <p>0 articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout/footer')

@stop
