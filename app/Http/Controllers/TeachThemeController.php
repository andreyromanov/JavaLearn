<?php

namespace App\Http\Controllers;

use App\TeachTheme;
use Illuminate\Http\Request;

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
