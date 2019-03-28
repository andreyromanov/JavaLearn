<head><title>JavaLearn</title></head>
<body>@extends('layouts.app')
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
            <!--ВОПРОС 1-->
            <div class="form-group">
              <label for="nameThemeInput">Вопрос 1</label>
              <input type="text" name="q1" class="form-control" placeholder="Введите вопрос 1" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a11" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca11" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a21" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca21" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a31" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca31" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a41" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca41" value="1" id="defaultCheck1">
              </div>
            </div>

            <!--ВОПРОС 2-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Вопрос 2</label>
              <input type="text" name="q2" class="form-control" placeholder="Введите вопрос 2" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a12" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca12" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a22" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca22" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a32" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca32" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a42" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca42" value="1" id="defaultCheck1">
              </div>
            </div>

             <!--ВОПРОС 3-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Вопрос 3</label>
              <input type="text" name="q3" class="form-control" placeholder="Введите вопрос 3" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a13" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca13" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a23" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca23" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a33" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca33" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a43" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca43" value="1" id="defaultCheck1">
              </div>
            </div>

             <!--ВОПРОС 4-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Вопрос 4</label>
              <input type="text" name="q4" class="form-control" placeholder="Введите вопрос 4" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a14" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca14" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a24" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca24" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a34" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca34" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a44" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca44" value="1" id="defaultCheck1">
              </div>
            </div>

            <!--ВОПРОС 5-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Вопрос 5</label>
              <input type="text" name="q5" class="form-control" placeholder="Введите вопрос 4" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a15" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca15" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a25" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca25" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a35" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca35" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a45" class="form-control" style="width:90%;display:inline;" placeholder="Вариант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca45" value="1" id="defaultCheck1">
              </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary text-center" style="margin-top: 20px;">Сохранить</button>
          </form>
  
</div>
</div>
</div>
</div>
</div>
@endsection
</body>