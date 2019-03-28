@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Регистрация</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Фамилия</label>

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
                            <label for="name" class="col-md-4 control-label">Имя</label>

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
                                    <option value="teacher">Преподаватель</option>
                                </select>
                            </div>
                        </div>

                        <div id="lvl" class="form-group" style="display: none;">
                            <label  class="col-md-4 control-label">Уровень образования</label>
                            <div class="col-md-6">
                                <select name="level" class="form-control" >
                                    <option value="">---</option>
                                    <option value="Ученик">Ученик</option>
                                    <option value="Младший специалист">Младший специалист</option>
                                    <option value="Бакалавр">Бакалавр</option>
                                    <option value="Магистр">Магистр</option>
                                </select>
                            </div>
                        </div>

                        <div id="age" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="display: none;">
                            <label for="age" class="col-md-4 control-label">Возраст</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="age" value="{{ old('age') }}">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Подтвердите пароль</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection