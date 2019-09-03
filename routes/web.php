<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('Welcome');
//});


/*Route::get('/about', function () {
    return "Route Pass " . view('pages.about');
});*/



//Route::get('/about' , 'pagesController@about');
//


//Route::get('/services' , function (){
//    return view('pages.Services');
//});

Route::get('about',function(){
   return view('pages.about');
});

//Route::get('/services','testcontroller@services');
//
//Route::get('/get/{id}' , 'testcontroller@get');

/*
Route::get('/posts/{id}/{author}',function ($id,$author){  //This one to take the values from the user
   return "The Post ID is " . $id ." and THe name of author is " . $author ;
});
*/


// lesson 6
//Route::get('/id/{id}/{user?}', function ($id ,$user ="Null" ){
//   return "Id :" . $id . " user name " . $user;
//}) ->where ('id' , '[0-9]+')  /*to make the id accepte numbers only */-> name('test id');/* and this to make it take a group*/
//
//Route::prefix('user')->group(function(){  //this line to make a route groupe
//
//    Route::get('/laravel' , function(){
//        return "Laravel";
//    });
//
//    Route::get('/Mohamed', function (){
//        return "User Mohamed";
//    });
//
//    Route::get('/database' , function(){
//        return "Database";
//    });
//});


//Lesson 7
/*
Route::get('/laravel' , 'testController@laravel');

Route::get('/reade/{id}/{user?}' , 'testController@reade');

Route::resource('MainR','newcontroller');
*/
//leason 10
/*
Route::get('/Get','reqController@request');

Route::get('/login','reqController@showLoginForm');

Route::post('/login','reqController@login');
*/

/*
//leason11 redirect
Route::get('/login' , 'redirectcontroller@showlogin');
Route::post('/login' , 'redirectcontroller@login');
Route::get('/homepage' , function (){
    return view('welcome');
})->name('/welcome');
*/
/*
//Lesson 12 session

Route::get("/getsession" , "sessioncontroller@getsession");
Route::get("/setsession" , "sessioncontroller@setsession");
Route::get("/deletesession" , "sessioncontroller@deletesession");
Route::get("/flashsession" , "sessioncontroller@flashsession")->name("session.ok");
*/
/*
//lesson 13 cookies

Route::get('/setcookie' , 'cookiecontroller@setcookie')->name('setcookie');
Route::get('/getcookie' , 'cookiecontroller@getcookie')->name('getcookie');

*/
/*
//lesson 14 language

Route::get('/language/{lang}' , 'langcontroller@index')->name('Langue');
*/
/*
//lesson 15 validate && //lesson 16 upload files

Route::get('/register' , 'validatecontroller@register');
Route::post('/register' , 'validatecontroller@save')->name('reg');
*/


/*
//lesson 18 bootstrap
Route::resource('/comments', 'commentcontroller');
*/

// lesson 9 from alzaabie
Route::get('/', 'PagesController@index' );
Route::get('/about', 'PagesController@about');
Route::get('/services', 'pagescontroller@services');

Route::get('/posts','postcontroller@index')->name('posts.index');


Route::get('/posts/create' , 'postcontroller@create')->name('posts.create');
Route::post('/posts' , 'postcontroller@store')->name('posts.store');

Route::get('/posts/{id}' , 'postcontroller@show')->name('posts.show');

Route::get('/posts/{id}/edit' , 'postcontroller@edit')->name('posts.edit');
Route::put('/posts/{id}' , 'postcontroller@update')->name('posts.update');
Route::delete('/posts/{id}' , 'postcontroller@destroy')->name('posts.destroy');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

route::get('/home' , 'pagescontroller@index')->name('home');

