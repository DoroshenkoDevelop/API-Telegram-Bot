<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Telegram
{
    protected $chat_id = 543162642;
    protected $http;
    public $message = 'Hello';
    const url = 'bot5205789708:AAGKxM9J6BWEW1LGBZUsIqSJBLveOUawKYw';

    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    public function sendMessage($chat_id, $message)
    {
        $this->http::post(self::url.'/sendMessage',[
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'html'
        ]);
    }

}
