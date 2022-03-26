<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\cookieController;
use App\Http\Controllers\cookieController;
use App\Http\Controllers\formcontroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('gyan', function () {
    return view('form');
});

Route::get('switch', function () {
    return view('switch'); 
});

Route::get('/mail', function () {
    return view('mailPage');
});

Route::post('/mail', function () {
    $data=request(['from1','to1','text']);

    \Illuminate\Support\Facades\Mail::to('surajsrivastava055@gmail.com')
        ->send(new \App\Mail\Mailme($data));
     return redirect('/mail') 
        ->with('flash','message send successfully');  
});


Route::post('/cookieSet', [cookieController::class, 'SetCookie']);
Route::post('/formset', [formcontroller::class, 'form']);
Route::post('/switchset', [formcontroller::class, 'switch']);
Route::get('/formJson', [formcontroller::class, 'form']);


