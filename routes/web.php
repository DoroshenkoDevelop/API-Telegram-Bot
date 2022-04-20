<?php


use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('order', function () {
   \Illuminate\Support\Facades\Http::post('https://api.tlgr.org/bot5205789708:AAGKxM9J6BWEW1LGBZUsIqSJBLveOUawKYw/sendMessage',[ // отправка простого сообщения
       'chat_id' => 543162642,
       'text' => 'message',
   ]);
});*/

Route::get('order', [\App\Helpers\Telegram::class,'sendMessage']);

