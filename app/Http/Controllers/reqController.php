<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reqController extends Controller
{
    public function Request (Request $request){
        return $request->url() ;
    }

    public function showLoginForm(){

        return view('login');
    }

    public function login(Request $request){

        //return $request->all();

//        $username=$request->input('username');
//        $password=$request->input('password');
//        return $username . "_" . $password ;

        $username=$request->username;
        $password=$request->password;
        return $username . "____" . $password;
    }


}
