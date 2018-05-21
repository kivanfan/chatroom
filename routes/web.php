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

use App\Events\MessagePosted;

Route::get('/', function () {
    return view('chat');
})->middleware('auth');

Auth::routes();


Route::post('/messages', function () {
//    return App\Message::with('user')->get();
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => request()->get('message')
    ]);
    broadcast(new MessagePosted($message,$user))->toOthers();

    return ['status' => 'OK'];
})->middleware('auth');


Route::get('/messages', function () {
    return App\Message::with('user')->get();
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
