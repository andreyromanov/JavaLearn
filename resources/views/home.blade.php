@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">



        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif


        @if ( Auth::user()->role=="teacher")
        <div class="panel-heading text-center">
          <h4> Оцінки учнів</h4>
        </div>

        <div class="panel panel-default">
        <table class="table table-bordered">
          <tbody>
            <th>Назва теми</th>
            <th>ПІ учня</th>
            <th>Оцінка</th>
            <th>Дата проходження</th>
            @foreach ($teachtest as $teachtest)
            <tr>
              <td><a href="teacher/themes/edit/{{$teachtest->theme_id}}">{{$teachtest->theme_name}}</a></td>
              <td>{{$teachtest->surname}} {{$teachtest->name}}</td>
              <td>{{$teachtest->testing_mark}}</td>
              <td>{{$teachtest->testing_date}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>

        @elseif( Auth::user()->role=="student")

        <div class="panel-heading text-center">
          <h4>Пройдені тести</h4>
        </div>
        <div class="panel panel-default">
        <table class="table table-bordered">
          <tbody>
            <th>Назва теми</th>
            <th>Оцінка</th>
            <th>Дата проходження теста</th>
            @foreach ($test as $test)

            <tr>
              <td><a href="student/theme/{{$test->theme_id}}">{{$test->theme_name}}</a></td>
              <td>{{$test->testing_mark}}</td>
              <td>{{$test->testing_date}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection