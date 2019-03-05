@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
			
				<div class="panel-body">
                <form>
  <div class="form-group">
    <label for="nameThemeInput">Название темы</label>
    <input type="text" class="form-control" id="nameThemeInput" placeholder="Введите название темы">
  </div>
  <div class="form-group">
    <label for="textThemeInput">Содержание</label>
    <textarea class="form-control" id="textThemeInput" placeholder="Введите текст"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


