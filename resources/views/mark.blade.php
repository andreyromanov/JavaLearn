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

            </div>
        </div>
    </div>
</div>
@endsection