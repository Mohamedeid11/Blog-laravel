<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langcontroller extends Controller
{
    public function index($lang){

        app()->setLocale($lang);
        echo trans('langue.msg');
    }
}
