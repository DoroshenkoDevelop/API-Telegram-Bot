<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Telegram
{
    protected $http,$bot;

    const url = 'https://api.tlgr.org/bot';

    public function __construct(Http $http, $bot)
    {
        $this->http = $http;
        $this->bot = $bot;
    }

    public function sendMessage(/*$chat_id, $message*/)
    {
        $this->http::post(self::url.$this->bot.'/sendMessage',[
            'chat_id' => env('REPORT_TELEGRAM_ID'),
            'text' => 'hello',
            'parse_mode' => 'html'
        ]);
    }

}
