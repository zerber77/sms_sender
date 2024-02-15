<?php

namespace App\Http\Controllers\API\Users;

use App\Console\SendSms;
use App\Http\Controllers\Controller;
use App\Sms;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SendController extends Controller
{
    public function __invoke(User $user){
        $message = 'Привет,';
        $res = Sms::send($user, $message);
        $data['user_id'] = $user['id'];
        $data['text'] = $message;
        $data['status'] = $res->getBody()->getContents();
        $data['mode'] = "Ручной";
        Sms::firstOrCreate($data);
        return($data['status']);
    }
}

