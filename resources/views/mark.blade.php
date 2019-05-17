@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Результат Вашого тесту!</h3>
                </div>

                <div class="panel-body text-center">
                    <h1>{{$mark}} бал(и)</h1>
                </div>
                <hr>
                <span style="font-size: 20px;">Зареєструйтесь и Вас зможуть запросити на день відкритих дверей!</span>

                <a href="/register">
                    <button type="btn btn-primary" class="btn btn-primary"
                        style="margin-bottom: 35px; margin-top:25px;">
                        Зареєструватися
                    </button>
                </a>

                <hr>
                    <h3 class="text-center">Переходьте за посиланнями:</h3>
               <div class="row">
                <div class="col-md-6 text-center">
                    <a href="https://www.onaft.edu.ua" target="_blank"><img src="{{ asset('img/logo.png') }}" alt=""
                            style="width: 150x;"></a><br><br>
                    <a href="https://www.onaft.edu.ua" target="_blank">
                        <h4>Університет</h4>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <a href="http://www.kipik.onaft.edu.ua/index.php/ua/" target="_blank"><img style="margin-top: 60px;" 
                            src="{{ asset('img/logo_kipk.png') }}" alt=""
                            style="width: 150px;margin-top: 35px;"></a><br><br>
                    <a href="http://www.kipik.onaft.edu.ua/index.php/ua/" target="_blank">
                        <h4 style="margin-top: 30px;">Факультет</h4>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection