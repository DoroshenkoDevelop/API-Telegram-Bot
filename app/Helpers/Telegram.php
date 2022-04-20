<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Telegram
{
    protected $http,$bot;

    const url = 'https://api.tlgr.org/bot';

    public function __construct(Http $http, $bot)
    {
        $this->http = $http;
        $this->bot = $bot;
    }

    public function sendMessage()
    {
        return $this->http::post(self::url.$this->bot.'/sendMessage',[
            'chat_id' => env('REPORT_TELEGRAM_ID'),
            'text' => 'hello',
            'parse_mode' => 'html'
        ]);
    }

    public function editMessage($message_id)
    {
        return $this->http::post(self::url.$this->bot.'/editMessageText',[
            'chat_id' => env('REPORT_TELEGRAM_ID'),
            'text' => 'hello',
            'parse_mode' => 'html',
            'message_id' => $message_id
        ]);
    }


    public function sendDocument($file, $chat_id) //Отправка документов
    {
       return $this->http::attach('document',Storage::get('/public/'.$file),'document.png')
           ->post(self::url.$this->bot.'/sendDocument',[
            'chat_id' => $chat_id,
        ]);
    }



}
