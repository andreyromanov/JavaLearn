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
                    <div class="panel-heading"> Оценки учеников</div>
                    <div class="panel-body">
                    <form>
                    <div class="form-group">
   
    <input type="text" class="form-control" id="namestudent" aria-describedby="studHelp" placeholder="Введите ФИО студента">
  </div>
                    <button type="submit" class="btn btn-primary">Поиск</button>
                    </form>
                    <table class="table">
  <tbody>
    <tr>
      <td><a href="ссылка на тему">Название темы</a></td>
      <td>Петечка Иванов</td>
      <td>9/10</td>
      <td>20.03.2019</td>
    </tr>
  </tbody>
</table>
                    </div>

@elseif( Auth::user()->role=="student")
<div class="panel-heading text-center">Пройденные тесты</div>
<div class="panel-body">
<table class="table">
  <tbody>
    <tr>
      <td><a href="ссылка на тему">Название темы</a></td>
      <td>9/10</td>
      <td>20.03.2019</td>
    </tr>
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
