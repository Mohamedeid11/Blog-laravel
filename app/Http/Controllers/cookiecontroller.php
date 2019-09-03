<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class cookiecontroller extends Controller
{
    public function setcookie(){
        Cookie::queue(Cookie::make('language' , 'arabic' , 3600));
        echo "cookie has set";
    }

    public function getcookie(){
        if (cookie::has('language')){
            $value=cookie::get('language');
            echo $value;
        }
    }
}
