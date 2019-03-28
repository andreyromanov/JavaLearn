
<head><title>JavaLearn</title></head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading text-center">
                    @foreach($quiz as $quiz)
                    <h2>{{$quiz->theme_name}}</h2>
                    @endforeach
                </div>

                <form class="" action="/theme/test/pass" method="post">
                {{ csrf_field() }}
                    <ul class="list-group"><?$i=1?>
                        @foreach($question_ids as $key)
                        
                       
                        <li class="list-group-item">Вопрос: {{$key->questions_text}}<br>

                        
                            @foreach($test as $answer)
                            
                            @if($answer->questions_id == $key->questions_id)
                            
                            <label><input type="checkbox" name="{{$i}}" value="{{$answer->answer_correctness}}" class=""> {{$answer->answers_text}}</label>
                            
                            @else
                            @endif
                            @endforeach
                            
                            <? $i++?>
                        </li>
                        @endforeach
                    </ul>

                    <button type="submit" name="submit" style="margin-left: 20%" class="btn btn-primary btn-lg text-center ">Завершить</button>
                </form>

                <div class="panel-body" style="padding-left: 30px;padding-right: 30px;">

                    <p>


                    </p>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection 
</body>