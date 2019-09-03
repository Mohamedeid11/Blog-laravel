<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function welcome(){
      return " The laravel From controller " . view('welcome');
    }

    public function reade($id , $user){
                return "The ID = " . $id . " The user Name " . $user;

    }

    /*public function reade($id , $user){
        for ($i=0 ; $i >=10000 ;$i++) {
            if ($id == $i) {
                return "The ID = " . $id . " The user Name " . $user;
            }
        }
    }*/
    public function services(){
        return view('pages.services');
    }

    public function get($id){
        return view('pages.get')->with('pageid',$id);
    }

}
