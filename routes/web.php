<?php

use App\Http\Controllers\ControllerCheck;
use App\Http\Controllers\GrettingsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\ResourceController;
use App\Http\Controllers\Registration;
use App\Http\Controllers\RsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{name?}/{id?}',function($name = null,$id = null){
    
    $data = compact('name','id');
    return view('demo')->with($data);

});

Route::post('/test',function(){

    echo "Testing post";
});

Route::get('/post',[PostController::class,'index']);


Route::get('/gretting/{title?}',[GrettingsController::class,'showMessage']);





Route::get('/print/{name?}',function($name=null){

    $tag = '<h3> Hello I am h3 tag </h3>';
    $data = compact('name','tag');
    return view('test')->with($data);

});


Route::get('/home',function(){
    return view('home');
});

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });


Route::get('/about',[ControllerCheck::class,'index']);

Route::get('/contact',SingleActionController::class);

Route::resource('photo', RsController::class);


Route::get('/register',[Registration::class,'index']);
Route::post('/register',[Registration::class,'register']);
