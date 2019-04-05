@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Результат Вашего теста!</h3>
                </div>

                <div class="panel-body text-center">
                    <h1>{{$mark}} балл(а)</h1>
                </div>
                <hr>
                <span style="font-size: 20px;">Зарегистрируйтесь и Вас смогут пригласить на день открытых дверей!</span>

                <a href="/register">
                    <button type="btn btn-primary" class="btn btn-primary"
                        style="margin-bottom: 35px; margin-top:25px;">
                        Зарегистрироваться
                    </button>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection