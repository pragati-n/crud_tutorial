<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\articlesController;
use App\Models\post;


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

/* Route::get('/', function () {
    return view('welcome');
});

Route::post('/saveitem', function () {
	
}); */


Route::get('/pages/contact',[contactController::class,'contact']);//'pageController@contact'
Route::get('/pages/about',[contactController::class,'about']);//'pageController@contact'
Route::get('/articles',[articlesController::class,'index']);//'pageController@contact'
Route::get('/articles/create',[articlesController::class,"create"]);
Route::post('/articles/store',[articlesController::class,"store"]);
Route::get('/articles/{id}',[articlesController::class,"show"]);

/* Route::get('articles/{post}',function (POST $post){
        return view("articles.show",["article" => $post]);
}); */

 Route::get('/blogs/',function(){
    /* $content = post::find_all(); */
    // OR
    $content = post::all();    
    return view("blogs.posts",[
        "posts" => $content
    ]); 


 
 });

Route::get('/blogs/{post:slug}',function(Post $post){
    
    return view("blogs.post",[
         // "file_content" => Post::find_by_slug($slug)
         // OR
         //"post" => Post::findOrFail($id)
         //OR
         "post"=>$post

   ]);
   
});
//->where('post','[A-Za-z_\-]+');

