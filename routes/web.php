<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


//Login Page Route
Route::get('/' , function(){
    return Inertia::render('Login');
});

//SignUp Page Route
Route::get('/signup' , function(){
    return Inertia::render('Signup');
});

//Reset Password Page Route
Route::get('/reset/password' , function(){
    return Inertia::render('ResetPassword');
});
Route::get('/reset/password/new' , function(){
    return Inertia::render('ResetPasswordNew');
});


// Main

Route::get('/main' , function(){
    return Inertia::render('Dash/Dashboard');
});



