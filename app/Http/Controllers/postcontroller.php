<?php

namespace App\Http\Controllers;

use App\post;

use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class postcontroller extends Controller
{

    //index page
    /**
     * postcontroller constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index' , 'show']);
    }

    public function index()
    {
        //dd(post::all());
        //$posts = post::all();
        $posts = post::orderBy('id' , 'desc')->paginate(5);
        $count = post::count();
        return view('posts.index' , compact('posts' ,'count'));
    }

    //show page

    public function show($id) {
        $post = post::find($id);
        return view('posts.show' , compact('post'));
    }

    //create page

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required|max:200',
            'posts'=>'required|max:500',
            'image' => 'image|mimes:jpg,bmp,png|max:1999'
        ]);

        if ($request->hasFile('Image')) {
            $file = $request->file('Image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = $file->getClientOriginalName().$ext ;
            $file->storeAs('public/Images', $filename);

        } else {

            $filename = 'noimage.png';
        }
        $post = new post();
        $post->name = $request->name;
        $post->posts = $request->posts;
        $post->user_id = auth()->user()->id;
        $post->image = $filename;


        $post->save();

        return redirect('/posts')->with('status' , $request->name .' post was created successfully ! By ' . auth()->user()->name);
    }

    // Edit post Form

    public function edit($id) {
        $post = Post::find($id);
        if (auth()->user()->id == $post->user_id) {
            return view('posts.edit', compact('post'));
        }
        return redirect('/posts')->with('error' , auth()->user()->name . ' Sorry You are not authorized ');
    }

    //update post from edit form

    public function update(Request $request ,$id){
//        $this->validate($request,
//            [
//                'name'=> 'required|max:200',
//                'posts'=>'required|max:500',
//            ]);
        $post = post::find($id);
        $post->name =$request->name;
        $post->posts =$request->posts;
        $post->image=$request->image;
        $post->user_id =auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('status' , $request->name . ' Post was updated successfully ! By ' . auth()->user()->name );
    }

    //destroy post

    public function destroy($id) {
        $post = post::find($id);
        $post->delete();

        return redirect('/posts')->with('status' ,$post ->name .' Post has deleted successfully ! By ' . auth()->user()->name    ) ;
    }

}
