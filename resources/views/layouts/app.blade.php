<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/jl.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JavaLearn</title>

    <link rel="stylesheet" type="text/css" href="bsmm/docs/css/bootstrap.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- подключаем стили Summernote -->

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <style type="text/css">
        .note-editing-area {
            min-height: 200px !important;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        JavaLearn
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="/themes">Теми</a></li>
                        <li><a href="/results">Результати</a></li>
                        <li><a href="{{ route('login') }}">Увійти</a></li>
                        <li><a href="{{ route('register') }}">Зареєструватися</a></li>
                        @else
                        @if(Auth::user()->role == "student")
                        <li><a href="{{ url('/student/themes') }}">Теми</a></li>
                        <li><a href="/results">Результати</a></li>
                        <li><a href="{{ url('/home') }}">Профіль</a></li>
                        @else
                        <li><a href="{{ url('/teacher/themes') }}">Мої теми</a></li>
                        <li><a href="/results">Результати</a></li>
                        <li><a href="{{ url('/home') }}">Профіль</a></li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false" aria-haspopup="true" v-pre>
                                {{Auth::user()->name}}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        Вийти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                        @endguest


                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- подключаем jquery -->

    

    <!-- подключаем сам summernote -->
    <script type="text/javascript" src="bsmm/docs/js/jquery.js"></script>
  
    <script type="text/javascript" src="bsmm/password-score/dist/js/password-score.js"></script>
    <script type="text/javascript" src="bsmm/password-score/dist/js/password-score-options.js"></script>
    <script type="text/javascript" src="bsmm/dist/js/bootstrap-strength-meter.js"></script>
   
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#example-progress-bar').strengthMeter('progressBar', {
            container: $('#example-progress-bar-container')
        });
    });
</script>
    <script>
        $(document).ready(function () {

            $('#text').summernote();


        });
    </script>


</body>

</html>