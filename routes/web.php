<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo',function(){
//     return view('demo.index');
// });

Route::get('/test',[TestController::class,'ComplexDataPassByCompact']);

Route::get('/demo',[ProjectController::class,'Template']);

Route::get('/home',[ProjectController::class,'index']);

Route::get('/contact',[ProjectController::class,'contact']);

Route::get('/project',[ProjectController::class,'project']);
