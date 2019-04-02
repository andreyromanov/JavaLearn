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

        return view('student/test', ['test' => $test, 'question_ids' => $question_ids, 'quiz' => $quiz, 'studTheme' => $studTheme]);
    }

    public function indexGuest($studTheme)
    {

        $quiz = DB::table('Topic')->select('theme_name', 'theme_id')->where('theme_id', '=', $studTheme)->get();
        $question_ids = DB::table('Questions')->select('questions_text', 'questions_id', 'question_type')->where('theme_id', '=', $studTheme)->get();
        $test =  DB::table('Topic')->JOIN('Questions', 'Topic.theme_id', '=', 'Questions.theme_id')->JOIN('Answers', 'Questions.questions_id', '=', 'Answers.questions_id')->where('topic.theme_id', $studTheme)->distinct()->get();

        return view('/test', ['test' => $test, 'question_ids' => $question_ids, 'quiz' => $quiz, 'studTheme' => $studTheme]);
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

        $testing_mark = $request['1'] + $request['2'] + $request['3'] + $request['4'];
        if ($request['7'] == $request['9']){
            $testing_mark = $testing_mark + $request['8'];
        }
        $pass_date = new \DateTime('now');
        if (StudTest::where('users_id','=',$request->users_id)->where('theme_id','=',$request->theme_id)->exists()){
        StudTest::where('users_id','=',$request->users_id)->where('theme_id','=',$request->theme_id)->update(['testing_mark' => $testing_mark, 'testing_date' => $pass_date]);
        }else{
        StudTest::create(
                ['users_id' => $request->users_id, 'theme_id' => $request->theme_id,
                'testing_mark' => $testing_mark, 'testing_date' => $pass_date]
            );}
        return redirect()->route('home');
    }

    public function passGuest(Request $request)
    {

        $testing_mark = $request['1'] + $request['2'] + $request['3'] + $request['4'];
        if ($request['7'] == $request['9']){
            $testing_mark = $testing_mark + $request['8'];
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
