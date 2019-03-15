@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-body">
          <form action="/teacher/themes/newtheme/create" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nameThemeInput">Название темы</label>
              <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
            </div>
            <div class="form-group">
              <label for="textThemeInput">Содержание</label>
              <textarea id="text" name="theme_text" class="form-control" placeholder="Введите текст"></textarea>
            </div>

            <input type="text" name="users_id" value="{{Auth::user()->id}}" style="display: none;">
            

          <h1 class="text-center">Вопросы по теме</h1>

          <div class="form-group">
            <label for="nameThemeInput">Вопрос 1</label>
            <input type="text" name="q1" class="form-control" placeholder="Введите вопрос">
            <br>
            <div class="col-md-3"><input type="text" name="a11" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 1">
              <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca11" value="1" id="defaultCheck1">
            </div>
            <div class="col-md-3"><input type="text" name="a12" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 2">
              <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca12" value="1" id="defaultCheck1">
            </div>
            <div class="col-md-3"><input type="text" name="a13" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 3">
              <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca13" value="1" id="defaultCheck1">
            </div>
            <div class="col-md-3"><input type="text" name="a14" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 4">
              <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca14" value="1" id="defaultCheck1">
            </div>
          </div>
<br>
<button type="submit" class="btn btn-primary text-center" style="margin-top: 20px;">Сохранить</button>
          </form>
  <!--
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 2</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 3</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 4</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 5</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 6</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 7</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 8</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 9</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="nameThemeInput">Вопрос 10</label>
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
-->

</div>
</div>
</div>
</div>
</div>
@endsection


