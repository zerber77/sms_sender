<?php

namespace App\Http\Controllers\API\Sms;

use App\Console\SendSms;
use App\Http\Controllers\Controller;
use App\Http\Resources\SmsResource;
use App\Sms;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
    $messages = Sms::all();
    return SmsResource::collection( $messages);
    }
}

