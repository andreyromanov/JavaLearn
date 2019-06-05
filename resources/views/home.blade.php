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
        @elseif(Auth::user()->role=="admin")
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
              aria-selected="true">Студенти</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
              aria-selected="false">Вчителі</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active in" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="panel-heading text-center">
              <h4>Зареєстровані студенти</h4>
            </div>
            <div class="panel panel-default">
              <table class="table table-bordered">
                <tbody>
                  <th>Ім'я</th>
                  <th>Пошта</th>
                  <th>Дія</th>
                  @foreach ($students as $student)

                  <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td><a href="user/delete/{{ $student->id }}" style=""><button type="button"
                          class="btn btn-danger  text-center">Видалити</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="panel-heading text-center">
              <h4>Зареєстровані вчителі</h4>
            </div>
            <div class="panel panel-default">
              <table class="table table-bordered">
                <tbody>
                  <th>Ім'я</th>
                  <th>Пошта</th>
                  <th>Дія</th>
                  @foreach ($teachers as $teacher)

                  <tr>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->email}}</td>
                    <td><a href="user/delete/{{ $teacher->id }}" style=""><button type="button"
                          class="btn btn-danger  text-center">Видалити</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection