@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <h3>{{$themeText->theme_name}}</h3>
        </div>
        <div class="panel-body" style="padding-left: 30px;padding-right: 30px;">
          <p>
            {!!$themeText->theme_text!!}
          </p>
          <div class="col-md-12 text-center">
            <a style="text-decoration: none; color:white" href="test/{{$themeText->theme_id}}"><button type="button"
                class="btn btn-primary btn-lg text-center" style="margin-top: 20px;">Начать тест</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection