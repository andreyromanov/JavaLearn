<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JavaLearn</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/nunito-sans" type="text/css" />
    <style type="text/css">
        body {
            font-family: 'NunitoSansRegular' !important;
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">




    <!-- Styles -->

</head>

<body>

    <div class="content bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-tr">
            <a class="navbar-brand text-white" href="#">JavaLearn</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end h5" id="navbarNav">

                <ul class="navbar-nav navbar-right">
                    @guest
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/themes">Темы</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/results">Результаты</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="{{ route('login') }}">Войти</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Зарегистрироваться</a>
                    </li>
                    @else

                    @if(Auth::user()->role == "student")



                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/student/themes">Темы</a>
                    </li>
                    <li class="nav-item mr-3">
                    <a class="nav-link text-white" href="/results">Результаты</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/home">Профиль</a>
                    </li>
                    @else

                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/teacher/themes">Мои темы</a>
                    </li>
                    <li class="nav-item mr-3">
                    <a class="nav-link text-white" href="/results">Результаты</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/home">Профиль</a>
                    </li>

                    @endif
                    @endguest
                </ul>
            </div>
        </nav>
        <div class="row m-0 pb-5">
            <div class="col-md-6 h-auto pt-5">

                <label class="text-white mt-5 h1"><b>JavaLearn.</b> Научиться программировать легко!</label> <br>


            </div>
            <div class="col-md-6 text-center h-400p">
                <img width="200px" src="img/java.png">
            </div>
        </div>
    </div>

    <div class="content text-center sect-2 bg-grey">
        <h1 id="features" class="">Как это работает</h1>
        <div class="row m-0 pb-5 pt-5" data-aos="zoom-in">
            <div class="space"></div>
            <div class="col-md-3 text-center m-4 pt-3 div-box">
                <i class="far fa-user fa-5x"></i> <br>
                <label class="pt-3"><b>Интерфейс</b></label>
                <label class="pt-2">Удобный пользовательский интерфейс как для ученика, так и для учителя.</label>

            </div>
            <div class="col-md-3 text-center m-4 pt-3 div-box">
                <i class="fas fa-book fa-5x"></i> <br>
                <label class="pt-3"><b>Теория</b></label>
                <label class="pt-2">Теоритический материал позволит досконально изучить язык программирования.</label>

            </div>
            <div class="col-md-3 text-center m-4 pt-3 div-box">
                <i class="far fa-check-circle fa-5x"></i> <br>
                <label class="pt-3"><b>Тесты</b></label>
                <label class="pt-2">Грамотные тесты позволят проверить полученые теоритические знания из теории.</label>

            </div>
        </div>
    </div>



    <div class="content bg">
        <div class="row m-0 pt-3">
            <div class="col-md-7 text-white m-auto">
                <h3><b>Java</b></h3>
                Один из наиболее популярных языков программирования. Проиди обучение и стань настоящим специалистом!
            </div>
            <div class="col-md-5 pt-5 text-center">
                <a href="#" class="gradient-button w-button mr-3 text-white mb-5">Теория</a>

            </div>
        </div>
    </div>


    <footer class="page-footer pt-3 pb-3">
        <div class="content text-center">
            <div class="container-fluid text-center">
                <div class="row">

                    <div class="col-sm-12 col-md-12 mb-md-0 mb-3 text-center">
                        <h3>JavaLearn</h3>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>




</body>

</html>