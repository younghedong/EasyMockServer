<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

                <div class="container">
                    <div class="jumbotron">
                        <h1>欢迎来到 Easy Mock Server</h1>
                        <p>请先阅读下面的介绍，学习下如何使用</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Project</h3>
                            <p>Project是为了方便管理，每个Project下面包含了所有该Project下的Path和mock的数据</p>
                            <p>比如，项目可以分为快手主App、快手小游戏等</p>
                        </div>
                        <div class="col-sm-4">
                            <h3>Path</h3>
                            <p>Path是请求的Path</p>
                            <p>比如/rest/n/live/startPush 是开播请求的Path，每个Project可以包含多个Path</p>
                        </div>
                        <div class="col-sm-4">
                            <h3>Case</h3>
                            <p>Case是你想要返回的数据</p>
                            <p>每个Path可以包含多个Case，但是同一时刻只能返回某一条数据</p>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
