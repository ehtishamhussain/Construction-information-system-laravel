<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contractorcontroller;
use App\Http\Controllers\directingcontroller;
use App\Http\Controllers\projectscontroller;


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

Route::get('/', [directingcontroller::class,'home']);
Route::post('/auth/save',[directingcontroller::class,'save'])->name('auth.save');
Route::post('/auth/check',[directingcontroller::class,'check'])->name('auth.check');
Route::get('/userslogout',[directingcontroller::class,'logout'])->name('auth.logout');
Route::post('/materials/save',[directingcontroller::class,'savematerial'])->name('materials.save');
Route::post('/worker/save',[directingcontroller::class,'saveworker'])->name('workers.save');


Route::get('/Add-material/{id}',[directingcontroller::class,'addmaterial'])->name('add.material');
Route::get('/Add-worker/{id}',[directingcontroller::class,'addworker'])->name('add.worker');

Route::put('/edit/workers/row',[directingcontroller::class,'editworkerstable']);
Route::put('/edit/materials/row',[directingcontroller::class,'editmaterialstable']);
Route::put('/edit/users/row',[directingcontroller::class,'edituserstable']);
Route::put('/status/complete/{id}',[directingcontroller::class,'completeproject']);
Route::delete('/delete-row/{id}', [directingcontroller::class,'deleterow']);
Route::delete('/delete/materials/row/{id}', [directingcontroller::class,'deletematerialsrow']);
Route::delete('/delete/users/row/{id}', [directingcontroller::class,'deleteusersrow']);





Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/usersdashboard',[directingcontroller::class,'dashboard']);
    Route::get('/Userslogin',[directingcontroller::class,'userslog']);
    Route::get('project-details/{id}',[directingcontroller::class,'projectdetails']);




});
Route::group(['middleware'=>['ContractorAuthCheck']],function (){
    Route::get('/cont-home',[directingcontroller::class,'conthome']);
    Route::resource('/projects',projectscontroller::class);
    Route::get('/register/{id}',[directingcontroller::class,'register'])->name('auth.register');
    Route::get('/contractorlogin',[directingcontroller::class,'cont']);


});

//Making routes for contractor

Route::post('/auth/contrcheck',[directingcontroller::class,'contcheck'])->name('auth.contrcheck');
Route::get('/contractorlogout',[directingcontroller::class,'contlogout'])->name('auth.contrlogout');