<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class ResultController extends Controller
{

  
    public function index()
    {
      //  $user = Auth::user();
      //  $test =  DB::table('Topic')->JOIN('Testing', 'Topic.theme_id', '=', 'Testing.theme_id')->where('testing.users_id', $user->id)->get();
      //  $teachtest=DB::table('Topic')->JOIN('Testing', 'Topic.theme_id', '=', 'Testing.theme_id')->JOIN('users','Testing.users_id','=','users.id')->where('Topic.users_id', $user->id)->get();

        $results = DB::table('users')->where('role','=','student')->join('testing','testing.users_id','=','users.id')->join('topic','topic.theme_id','=','testing.theme_id')->orderby('theme_name')->get();
        return view('results',['results'=>$results]);
    }
}
