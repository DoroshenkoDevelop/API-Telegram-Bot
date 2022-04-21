<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('send', function () {
    \Illuminate\Support\Facades\Http::post('https://api.tlgr.org/bot5205789708:AAGKxM9J6BWEW1LGBZUsIqSJBLveOUawKYw/sendMessage',[ // отправка простого сообщения
        'chat_id' => 543162642,
        'text' => 'message',
    ]);
});

Route::get('message', [\App\Helpers\Telegram::class,'sendMessage']); //отправка сообщения

Route::get('message/edit', function (\App\Helpers\Telegram $telegram) {
    $telegram->editMessage('100'); // редактирование текста по id сообщения
});


Route::get('document', function (\App\Helpers\Telegram $telegram) {
    $telegram->sendDocument('1.png',543162642); // отправка файлов
});
