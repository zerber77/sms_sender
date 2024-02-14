<?php

namespace App\Http\Controllers\Client;

use App\Console\SendSms;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $birthDate = Carbon::today()->addDays(7);
 /*       $users['phone'] = '564654564';
        $users['name'] = '564654564';
        $users['birth'] = Carbon::today();
        $users = User::firstOrCreate($users);*/
        //dd(11111);
        return(view('client.index'));
    }
}

