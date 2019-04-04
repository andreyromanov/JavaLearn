<?php

namespace App\Http\Controllers;

use App\Questions;
use App\Answers;
use App\StudTheme;
use App\StudTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudTestController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getQuestion($id)
    {
        /*	$question = Questions::find($id);*/
        $question = DB::table('Questions')->select('questions_id')->where('theme_id', '=', $id);

        return $question;
    }

    public function index($studTheme)
    {

        $quiz = DB::table('Topic')->select('theme_name', 'theme_id')->where('theme_id', '=', $studTheme)->get();
        $question_ids = DB::table('Questions')->select('questions_text', 'questions_id', 'question_type')->where('theme_id', '=', $studTheme)->get();
        $test =  DB::table('Topic')->JOIN('Questions', 'Topic.theme_id', '=', 'Questions.theme_id')->JOIN('Answers', 'Questions.questions_id', '=', 'Answers.questions_id')->where('topic.theme_id', $studTheme)->distinct()->get();
        $acc =  DB::table('Topic')->JOIN('Questions', 'Topic.theme_id', '=', 'Questions.theme_id')->JOIN('accordance', 'Questions.questions_id', '=', 'accordance.questions_id')->where('topic.theme_id', $studTheme)->distinct()->get();
     
        return view('student/test', ['acc'=>$acc,'test' => $test, 'question_ids' => $question_ids, 'quiz' => $quiz, 'studTheme' => $studTheme]);
    }

    public function indexGuest($studTheme)
    {

        $quiz = DB::table('Topic')->select('theme_name', 'theme_id')->where('theme_id', '=', $studTheme)->get();
        $question_ids = DB::table('Questions')->select('questions_text', 'questions_id', 'question_type')->where('theme_id', '=', $studTheme)->get();
        $test =  DB::table('Topic')->JOIN('Questions', 'Topic.theme_id', '=', 'Questions.theme_id')->JOIN('Answers', 'Questions.questions_id', '=', 'Answers.questions_id')->where('topic.theme_id', $studTheme)->distinct()->get();
        $acc =  DB::table('Topic')->JOIN('Questions', 'Topic.theme_id', '=', 'Questions.theme_id')->JOIN('accordance', 'Questions.questions_id', '=', 'accordance.questions_id')->where('topic.theme_id', $studTheme)->distinct()->get();
        return view('/test', ['test' => $test, 'question_ids' => $question_ids, 'quiz' => $quiz, 'studTheme' => $studTheme, 'acc' => $acc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pass(Request $request)
    {

        $accord = $request['acc10'];
        $accord2 = $request['acc11'];
        $accord3 = $request['acc12'];
        $questionaccord = $request['questionsid10'];
        $questionaccord2 = $request['questionsid11'];
        $questionaccord3 = $request['questionsid12'];
        $acc = DB::table('accordance')->where('accordance_id', '=', $questionaccord)->first()->RA;
        $acc2 = DB::table('accordance')->where('accordance_id', '=', $questionaccord2)->first()->RA;
        $acc3 = DB::table('accordance')->where('accordance_id', '=', $questionaccord3)->first()->RA;
        $testing_mark = 0;

        $testing_mark = $request['1'] + $request['2'] + $request['3'] + $request['4'];
        if ($request['7'] == $request['9']) {
            $testing_mark = $testing_mark + $request['8'];
        }
        if ($accord == $acc) {
            $testing_mark++;
        }
        if ($accord2 == $acc2) {
            $testing_mark++;
        }
        if ($accord2 == $acc2) {
            $testing_mark++;
        }
        $pass_date = new \DateTime('now');
        if (StudTest::where('users_id', '=', $request->users_id)->where('theme_id', '=', $request->theme_id)->exists()) {
            StudTest::where('users_id', '=', $request->users_id)->where('theme_id', '=', $request->theme_id)->update(['testing_mark' => $testing_mark, 'testing_date' => $pass_date]);
        } else {
            StudTest::create(
                [
                    'users_id' => $request->users_id, 'theme_id' => $request->theme_id,
                    'testing_mark' => $testing_mark, 'testing_date' => $pass_date
                ]
            );
        }
        return redirect()->route('home');
    }

    public function passGuest(Request $request)
    {
        $accord = $request['acc10'];
        $accord2 = $request['acc11'];
        $accord3 = $request['acc12'];
        $questionaccord = $request['questionsid10'];
        $questionaccord2 = $request['questionsid11'];
        $questionaccord3 = $request['questionsid12'];
        $acc = DB::table('accordance')->where('accordance_id', '=', $questionaccord)->first()->RA;
        $acc2 = DB::table('accordance')->where('accordance_id', '=', $questionaccord2)->first()->RA;
        $acc3 = DB::table('accordance')->where('accordance_id', '=', $questionaccord3)->first()->RA;
        $testing_mark = 0;
        $testing_mark = $request['1'] + $request['2'] + $request['3'] + $request['4'];
        if ($request['7'] == $request['9']) {
            $testing_mark = $testing_mark + $request['8'];
        }
        if ($accord == $acc) {
            $testing_mark++;
        }
        if ($accord2 == $acc2) {
            $testing_mark++;
        }
        if ($accord3 == $acc3) {
            $testing_mark++;
        }

        return view('mark')->with(['mark' => $testing_mark]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\StudTest  $studTest
     * @return \Illuminate\Http\Response
     */
    public function show(StudTest $studTest)
    {
        $test = DB::table('Topic')->where('theme_id', $request->theme_id);
        $themeText = StudTest::find($studTest);
        // return view('student/text',['themeText'=>$themeText]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudTest  $studTest
     * @return \Illuminate\Http\Response
     */
    public function edit(StudTest $studTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudTest  $studTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudTest $studTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudTest  $studTest
     * @return \Illuminate\Http\Response
     */
}
