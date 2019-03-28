<?php

namespace App\Http\Controllers;

use App\TeachTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TeachThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $que = DB::table('questions')->select('questions_id')->where('theme_id', '=', 13)->get();
       $user = Auth::user();
        $themes = TeachTheme::all()->where('users_id','=',$user->id);

        return view('teacher/themes',['themes' => $themes,'user'=>$user]);
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
    public function store(Request $request)
    {
        TeachTheme::create([
            'theme_name' => $request->theme_name,
            'theme_text' => $request->theme_text,
            'users_id' => $request->users_id
        ]);

       //берем id текущей темы
        $themeid =  DB::table('Topic')->where('theme_name', $request->theme_name)->value('theme_id');

        for ($i = 1; $i <= 4; $i++) {
    //создаем вопрос
            DB::table('questions')->insert(
                ['questions_text' => $request->{'q'.$i}, 'theme_id' => $themeid, 'question_type' => 'test']
            );
        //берем id вопроса для ответов
            $questionid =  DB::table('questions')->where('questions_text',$request->{'q'.$i})->value('questions_id');
        //массив с вариантами к ответу
            $data = array(
             array('questions_id' => $questionid, 'answers_text' => $request->{'a1'.$i}, 'answer_correctness' => $request->{'ca1'.$i}),
             array('questions_id' => $questionid, 'answers_text' => $request->{'a2'.$i}, 'answer_correctness' => $request->{'ca2'.$i}),
             array('questions_id' => $questionid, 'answers_text' => $request->{'a3'.$i}, 'answer_correctness' => $request->{'ca3'.$i}),
             array('questions_id' => $questionid, 'answers_text' => $request->{'a4'.$i}, 'answer_correctness' => $request->{'ca4'.$i})
         );
        //вставляем массив с вариантами к вопросу
            DB::table('answers')->insert($data);
        } 
        //fill
        DB::table('questions')->insert(
            ['questions_text' => $request->{'q5'}, 'theme_id' => $themeid, 'question_type' => 'fill']
        );
        //берем id вопроса для ответов
        $questionid =  DB::table('questions')->where('questions_text',$request->{'q5'})->value('questions_id');
        
        DB::table('answers')->insert(
            ['questions_id' => $questionid, 'answers_text' => $request->{'a15'}, 'answer_correctness' => 2 ]
        );
        return redirect()->action('TeachThemeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeachTheme  $teachTheme
     * @return \Illuminate\Http\Response
     */
    public function show(TeachTheme $teachTheme)
    {
        //
     $themeText = TeachTheme::find($teachTheme);
    // return view('student/text',['themeText'=>$themeText]);
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeachTheme  $teachTheme
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachTheme $teachTheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeachTheme  $teachTheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeachTheme $teachTheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeachTheme  $teachTheme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        DB::table('Topic')->where('theme_id', $id)->delete();

        $themes = TeachTheme::all();

        return redirect()->action('TeachThemeController@index');
    }
}
