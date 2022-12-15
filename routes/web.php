<?php

use App\Http\Controllers\Grade\ClassroomController;
use App\Http\Controllers\Grade\GradeController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

Route::middleware('lang')->group(function(){


    Route::get('/', function()
    {
        return view('pages.dashboard');
     });
     Route::get('grades',[GradeController::class,'index'] );
     Route::post('Grades.store',[GradeController::class,'store'] );
     Route::post('Grades/update',[GradeController::class,'update'] );
     Route::post('Grades/destroy',[GradeController::class,'delete'] );

     Route::get('classrooms',[ClassroomController::class,'index'] );
     Route::post('classrooms/store',[ClassroomController::class,'store'] );
     Route::post('classrooms/update',[ClassroomController::class,'update'] );
     Route::post('classrooms/destroy',[ClassroomController::class,'delete'] );
     Route::post('delete_all',[ClassroomController::class,'deleteAll'] );
     Route::POST('Filter_Classes',[ClassroomController::class,'Filter_Classes'] ); 
     Route::view('add_parent','livewire.show_Form');
     Route::get('test',function(){
      return view('pages.empty');  
     } );
    });
Route::get('lang/{lang}',[LangController::class,'lang'] );
