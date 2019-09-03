<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validatecontroller extends Controller
{
    public function register(){
        return view('register');
    }

    public function save(Request $request)
    {
        $this->validate($request , [
            'username' =>'required',
            'password' =>'required|min:6',
            'email' =>'required|email',

            //'image' => 'nullable|img'
        ],$messages=[
            'username.required'=>'shit on you u forget this field'
        ]);

        if ($request->hasFile('image')){
            $fileobject = $request->file('image'); //this to make a vriable holding the object bath like a shortcut name

            $extention = $fileobject->getClientOriginalExtension();
            $mimetype = $fileobject->getClientMimeType();
            $filename = $fileobject->getClientOriginalName();
            $size = $fileobject->getSize();


            //$path = $fileobject->store('public/avatar');
            $path = $fileobject->storeAs('public/avatar',time(). "." . $extention);
        }
        return $path . $size . $mimetype . $extention . $filename;
    }
}
