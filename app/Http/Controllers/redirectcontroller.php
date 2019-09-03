<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectcontroller extends Controller
{
    public function showlogin(){
        return view('login');
    }

    public function login(Request $request){
        $username='Mohamed';
        $password=123;

        if ($username==$request->input('username') && $password == $request->input('password')){
            //return redirect('/welcome');// دي طريقه لو انا مسجل اسم الصفحه بنفس اسم الريديريكت
            return redirect(route('/welcome'));
        }

        return redirect()->back();
    }
}
