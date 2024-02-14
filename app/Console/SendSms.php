<?php


namespace App\Console;


use App\User;
use Carbon\Carbon;

class SendSms
{
    public function __invoke(){
        $birthDate = Carbon::today()->addDays(7);
        $users['phone'] = '564546654564';
        $users['name'] = '564654564564';
        $users['birth'] = Carbon::today();
        User::firstOrCreate($users);
    }
}
