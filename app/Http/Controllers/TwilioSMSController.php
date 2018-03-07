<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\ServiceProvider;
use App\Providers\AppServiceProvider;
use Plivo\RestClient;
class TwilioSMSController extends Controller
{

    public function sendSMS()
    {
        $client = new RestClient("MAMDY3OWE3YWMZYTK3OW", "YzMwNjNhODBmNGM5NTNiOTI2MGZlZjdlZDcwOTI1");
        $message_created = $client->messages->create(
            '+1-415-484-7489',
            ['+385995982910'],
            'Hello, world!'
        );
    }


}
