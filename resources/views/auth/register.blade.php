@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Реєстрація</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Прізвище</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname"
                                    value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Ім'я</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Тип</label>
                            <div class="col-md-6">
                                <select onclick="reg()" id="type" name="role" class="form-control" required="">
                                    <option>---</option>
                                    <option value="student">Студент</option>
                                    <option value="teacher">Викладач</option>
                                </select>
                            </div>
                        </div>

                        <div id="lvl" class="form-group" style="display: none;">
                            <label class="col-md-4 control-label">Рівень освіти</label>
                            <div class="col-md-6">
                                <select name="level" class="form-control">
                                    <option value="">---</option>
                                    <option value="Учень">Учень</option>
                                    <option value="Молодший спеціаліст">Молодший спеціаліст</option>
                                    <option value="Бакалавр">Бакалавр</option>
                                    <option value="Магiстр">Магістр</option>
                                </select>
                            </div>
                        </div>

                        <div id="age" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"
                            style="display: none;">
                            <label for="age" class="col-md-4 control-label">Вік</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="example-progress-bar" type="password" class="form-control" name="password"
                                    required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group" style="font-size: 12px;">
                            <label for="password" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <p id="passwordHelpBlock" class="form-text text-muted">
                                    Пароль ма бути не менше 6 символів, мати хоча б 1 велику та 1
                                    маленьку літери латинського алфавіту, 1 цифру та 1 символ ( # ? ! @ $ % ^ & * - ).
                                </p>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <label class="control-label col-md-4">Надійність паролю</label>
                            <div class="col-md-6" id="example-progress-bar-container">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Підтвердіть пароль</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Зареєструватися
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('bsmm/docs/js/jquery.js') }}"></script>
  
<script type="text/javascript" src="{{ asset('bsmm/password-score/dist/js/password-score.js') }}"></script>
<script type="text/javascript" src="{{ asset('bsmm/password-score/dist/js/password-score-options.js') }}"></script>
<script type="text/javascript" src="{{ asset('bsmm/dist/js/bootstrap-strength-meter.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-progress-bar').strengthMeter('progressBar', {
            container: $('#example-progress-bar-container')
        });
    });
</script>
@endsection