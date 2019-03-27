<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $test =  DB::table('Topic')->JOIN('Testing', 'Topic.theme_id', '=', 'Testing.theme_id')->where('testing.users_id', $user->id)->get();
        $teachtest=DB::table('Topic')->JOIN('Testing', 'Topic.theme_id', '=', 'Testing.theme_id')->JOIN('users','Testing.users_id','=','users.id')->where('Topic.users_id', $user->id)->get();

        return view('home',['test'=>$test,'teachtest'=>$teachtest]);
    }
}
