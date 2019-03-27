@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h4>Результаты тестов!</h4>
                </div>

               
                <table class="table table-bordered">
            <tbody>
            <th>Имя</th>
            <th>Почта</th>
            <th>Возраст</th>
            <th>Степень</th>
            @foreach ($results as $res)
              <tr>
                <td>{{$res->surname}} {{$res->name}}</a></td>
                <td>{{$res->email}}</td>
                <td>{{$res->age}}</td>
                <td>{{$res->level}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
                
            </div>
        </div>
    </div>
</div>
@endsection