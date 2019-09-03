<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

class commentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $comments = comment::all();
       // $comments = comment::latest()->get(); //لو عاوز ارتبهم من اخر حاجه انضافت ولازم احط get
        //$comments = comment::orderby('created_at' , 'desc')->get();
        //$comments = comment::where('id' , '>=' , 3)->get(); //هنا برتب على حسب ال id وعلشان احط اوبرايشن معينه بحطه في العلامه اللي موجوده دي في النص
        $comments = comment::where('id' , '>=' , 3)->latest()->get(); //علشان ادمج شرطين مع بعض
        return view('comment.index')->with('comments' , $comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name'=>'required' ,
            'comment'=>'nullable'
        ]);

        $c = new comment();
        $c->name = $request->input('name');
        $c->comment = $request->input('comment');
        $c->save();

        return redirect (route('comments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$comment = comment::where('id' , $id)->get();
        $comment = comment::find($id);
        return view('comment.show')->with('comment' . $comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
