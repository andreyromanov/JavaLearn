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
  
  <input type="text" name="users_id" value="{{Auth::user()->id}}" >
  
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


