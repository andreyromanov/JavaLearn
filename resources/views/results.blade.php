@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h4>Результати тестів!</h4>
                </div>
                <div class="panel panel-default">
                    <table class="table table-bordered">
                        <tbody>
                            <th>Назва теми</th>
                            <th>Ім'я</th>
                            <th>Пошта</th>
                            <th>Вік</th>
                            <th>Ступінь</th>
                            <th>Оцінка</th>
                            @foreach ($results as $res)
                            <tr>
                                <td>{{$res->theme_name}}</td>
                                <td>{{$res->surname}} {{$res->name}}</a></td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->age}}</td>
                                <td>{{$res->level}}</td>
                                <td>{{$res->testing_mark}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection