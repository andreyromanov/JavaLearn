<?php

namespace App\Http\Controllers;

use App\StudTheme;
use Illuminate\Http\Request;

class StudThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $themes = StudTheme::all();

        return view('student/themes',['themes' => $themes]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudTheme  $studTheme
     * @return \Illuminate\Http\Response
     */
    public function show(StudTheme $studTheme)
    {
        return view('student/text', ['themeText' => $studTheme]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudTheme  $studTheme
     * @return \Illuminate\Http\Response
     */
    public function edit(StudTheme $studTheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudTheme  $studTheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudTheme $studTheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudTheme  $studTheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudTheme $studTheme)
    {
        //
    }
}
