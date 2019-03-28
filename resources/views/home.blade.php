<head><title>JavaLearn</title></head>
<body>@extends('layouts.app')

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
        <div class="panel-heading text-center" > Оценки учеников</div>
        
          <form>
            <div class="form-group">

              <input type="text" class="form-control" id="namestudent" aria-describedby="studHelp" placeholder="Введите ФИО студента">
            </div>
            <button type="submit" class="btn btn-primary">Поиск</button>
          </form>
          <table class="table table-bordered">
            <tbody>
            <th>Название темы</th>
            <th>ФИ ученика</th>
            <th>Оценка</th>
            <th>Дата прохождения</th>
            @foreach ($teachtest as $teachtest)
              <tr>
                <td><a href="theme/{{$teachtest->theme_id}}">{{$teachtest->theme_name}}</a></td>
                <td>{{$teachtest->surname}} {{$teachtest->name}}</td>
                <td>{{$teachtest->testing_mark}}</td>
                <td>{{$teachtest->testing_date}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      

        @elseif( Auth::user()->role=="student")
        
        <div class="panel-heading text-center"><h4>Пройденные тесты</h4></div>
          <table class="table table-bordered">
            <tbody>
            <th>Название темы</th>
            <th>Оценка</th>
            <th>Дата прохождения теста</th>
            @foreach ($test as $test)
            
              <tr>
                <td><a href="student/theme/{{$test->theme_id}}">{{$test->theme_name}}</a></td>
                <td>{{$test->testing_mark}}</td>
                <td>{{$test->testing_date}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
</body>