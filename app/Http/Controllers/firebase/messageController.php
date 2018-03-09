<?php

namespace App\Http\Controllers\firebase;


use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use HttpRequest;

class messageController extends Controller
{
    //

    public function sendFCM()
    {

        $key_token = "AAAAmrEEZok:APA91bHcHeCY-sTl6Tft4IL9ElaBV07IefQCsB6CGLkNFYViA6uZpCAeUnCwFW0oCi1D3TTehv5WAS__t73SmV5ywQlsVKb36XphGb57pXUE4ufnF84jL0vFBTJk94fdUQQWymUjxaWc";
        $title = "Portugal vs. Denmark";
        $body = "hghghjgj";
        $icon = "https://rtl-cdnstatic.r.worldssl.net/image/1a630558ebc60967f71e402def2f4079_view_article_new.jpg?v=20";
        $click_action = "http://127.0.0.1:8000/firestore";
        $to = "cW4HkZDLolc:APA91bFuFCzrqMTfp8hRNdlEdFJrc2cmIBjXK82qG5ka6DrAJf-KK_b_C9dQIAhMNmkr7VsZvdRDdG207_9UjOcyFoC_EZ5IMovKrlgnWBuJuGWuftm0C0RQM-VY6YbAYIUgkLMyRKpY";


        $content = "{
  \"notification\": {
    \"title\": \"" . $title . "\",
    \"body\": \"" . $body . "\",
    \"icon\": \"" . $icon . "\",
    \"click_action\": \"" . $click_action . "\"
  },
  \"to\": \"" . $to . "\"
}";
        \GuzzleHttp\json_decode($content);
        $client = new Client();

        $res = $client->request('POST', 'http://fcm.googleapis.com/fcm/send', [
            'body' => $content,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'key=' . $key_token
            ],


        ]);


        echo $res->getStatusCode();
        // "200"
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'


    }
}
