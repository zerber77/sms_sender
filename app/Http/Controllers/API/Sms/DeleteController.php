<?php

namespace App\Http\Controllers\API\Sms;

use App\Http\Controllers\Controller;
use App\Sms;
use App\User;

class DeleteController extends Controller
{
    public function __invoke(Sms $sms){
        $sms->delete();
        return('Ok');
    }
}
