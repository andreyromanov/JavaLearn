<?php

namespace App\Http\Controllers;

use App\TeachTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $themes = TeachTheme::all();

        return view('teacher/themes',['themes' => $themes]);
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

        $themeid =  DB::table('Topic')->where('theme_name', $request->theme_name)->value('theme_id');

        DB::table('questions')->insert(
            ['questions_text' => $request->q1, 'theme_id' => $themeid]
        );

        $questionid =  DB::table('questions')->where('questions_text',$request->q1)->value('questions_id');

        $data = array(
           array('questions_id' => $questionid, 'answers_text' => $request->a11, 'answer_correctness' => $request->ca11),
           array('questions_id' => $questionid, 'answers_text' => $request->a12, 'answer_correctness' => $request->ca12),
           array('questions_id' => $questionid, 'answers_text' => $request->a13, 'answer_correctness' => $request->ca13),
           array('questions_id' => $questionid, 'answers_text' => $request->a14, 'answer_correctness' => $request->ca14)
       );

        DB::table('answers')->insert($data);

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
    public function destroy(TeachTheme $teachTheme)
    {
        //
    }
}
