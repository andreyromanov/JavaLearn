@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">


        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
        </div>


        @if ( Auth::user()->role=="teacher")
        <div class="panel-heading text-center" > Оценки учеников</div>
        <?
        $i=1;
        $object = new stdClass();
        $object->property1 = 'Here we go';
        echo $object->{'property'.$i} 
        ?>
        <div class="panel-body">
          <form>
            <div class="form-group">

              <input type="text" class="form-control" id="namestudent" aria-describedby="studHelp" placeholder="Введите ФИО студента">
            </div>
            <button type="submit" class="btn btn-primary">Поиск</button>
          </form>
          <table class="table">
            <tbody>
            <th>Название темы</th>
            <th>ФИ ученика</th>
            <th>Оценка</th>
            <th>Дата прохождения</th>
            @foreach ($teachtest as $teachtest)
              <tr>
                <td><a href="ссылка на тему">{{$teachtest->theme_name}}</a></td>
                <td>{{$teachtest->surname}} {{$teachtest->name}}</td>
                <td>{{$teachtest->testing_mark}}</td>
                <td>{{$teachtest->testing_date}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        @elseif( Auth::user()->role=="student")
        
        <div class="panel-heading text-center">Пройденные тесты</div>
        <div class="panel-body">
          <table class="table">
            <tbody>
            <th>Название темы</th>
            <th>Оценка</th>
            <th>Дата прохождения теста</th>
            @foreach ($test as $test)
            
              <tr>
                <td><a href="ссылка на тему">{{$test->theme_name}}</a></td>
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
</div>
@endsection
