<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use test\Mockery\ReturnTypeObjectTypeHint;

class sessioncontroller extends Controller
{
    public function getsession(Request $request){

        if ($request->session()->has("name")){
          echo $request->session()->get("name");
        }else{
            echo "Session Not found";
        };
    }
    public function setsession(Request $request){

        $request->session()->put('name' , 'Mohamed');
        return redirect(route("session.ok"))->with("msg" , "sessioncreated");
        //echo "session created";
    }
    public function deletesession(Request $request){
        $request->session()->forget("name");
        echo "Session was deleted";
    }

    public function flashsession(Request $request){

        return view("alrt");
    }
}
