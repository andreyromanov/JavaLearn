@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
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
    <input type="text" name="theme_name" class="form-control" placeholder="Введите название темы">
  </div>
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
  
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


