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
                    <ul class="list-group">
                        <? $i = 1 ?>
                        @foreach($question_ids as $key)

                        @if($key->question_type == 'test')
                        <li class="list-group-item">
                            <label style="font-size: 16px;">Питання: {{$key->questions_text}}</label><br><br>
                            @else

                            @endif
                            <div class="row">
                                @foreach($test as $answer)

                                @if($answer->questions_id == $key->questions_id and $answer->question_type == 'test')

                                <div class="col-md-12">
                                    <label>
                                        <input type="radio" name="{{$i}}" value="{{$answer->answer_correctness}}"
                                            class="">
                                        {{$answer->answers_text}}
                                    </label>
                                </div>

                                @else
                                @endif

                                @endforeach
                            </div>
                            <? $i++ ?>
                        </li>
                        @endforeach


                        @foreach($question_ids as $key)

                        @if($key->question_type == 'fill')
                        <li class="list-group-item"><label style="font-size: 16px;">Питання:
                                {{$key->questions_text}}</label><br><br>
                            @else

                            @endif

                            @foreach($test as $answer)


                            @if($answer->questions_id == $key->questions_id and $answer->question_type == 'fill')

                            <input type="text" name="{{$i}}" class="form-control" style="width: 200px;">
                            <input type="input" name="{{$i+1}}" value="{{$answer->answer_correctness}}"
                                style="display: none;">
                            <input type="input" name="{{$i+2}}" value="{{$answer->answers_text}}"
                                style="display: none;">
                            @else
                            @endif
                            @endforeach


                        </li>
                        @endforeach

                        @foreach($question_ids as $key)

                        @if($key->question_type == 'accordance')
                        <li class="list-group-item"><label style="font-size: 16px;">Питання:
                                {{$key->questions_text}}</label><br><br>
                            @else
                            @endif
                            <div class="row">
                                <? $i = 10;
                                    $j = 1;
                                    $a = array('А', 'Б', 'В'); ?>
                                @foreach($acc as $ac)


                                @if($ac->questions_id == $key->questions_id and $ac->question_type == 'accordance')
                                <div class="col-md-3 text-center"><label> {{$a[$j-1]}}. {{$ac->LP}}</label><br>
                                </div>

                                <div class="col-md-3"><label> {{$j}}. {{$ac->RP}}</label><br></div>
                                <div class="col-md-6" style="display: inline;"><label> {{$a[$j-1]}}. </label>
                                    <input type="text" name="acc{{$i}}" class="form-control"
                                        style="width: 50px;display: inline;"></label> <br></div>

                                <input type="input" name="questionsid{{$i}}" value="{{$ac->accordance_id}}"
                                    style="display: none;">

                                @else
                                @endif
                                <? $j++; ?>
                                <? $i++ ?>
                                @endforeach
                            </div>

                        </li>
                        @endforeach
                    </ul>
                    <br>

                    <button type="submit" name="submit" style="margin-left: 45%;margin-bottom: 20px;"
                        class="btn btn-primary btn-lg text-center ">Завершити</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection