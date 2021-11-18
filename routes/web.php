<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;

//

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

   Route::get('/', function () {
     return view('welcome');
  });

  Route::get('/students',[StudentController::class, 'index']);
  Route::get('/students/add',[StudentController::class, 'create']);
  Route::post('/students/save',[StudentController::class, 'save']);

  Route::get('/students/edit/{id}',[StudentController::class, 'edit']);
  Route::post('/students/update',[StudentController::class, 'update']);

  Route::delete('/students /delete/{id}',[StudentController::class, 'delete']);
  
  Route::resource('photos', PhotoController::class);

  //mail route
  Route::get('/Email',[EmailController::class, 'Test']);
// model
  Route::get('/user',[UserController::class, 'index']);
  

  
