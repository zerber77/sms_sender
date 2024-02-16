<?php


namespace App\Console;


use App\Sms;
use App\User;
use Carbon\Carbon;

class SendBirthdaySms
{
    public function __invoke()
    {
//        $today =  Carbon::today()->format('m-d');
//        $birthDate =  Carbon::today()->addDays(7)->format('m-d');
        $smss = Sms::query()->where('status', 'ToSend')->get();
        foreach ($smss as $sms) {
            $user = User::query()->where('id', $sms['user_id'])->get();

            $message = 'C Днем рождения,';
            $res = Sms::send($user[0], $message);
            $data['user_id'] = $user[0]['id'];
            $data['text'] = $message;
            $data['status'] = $res->getBody()->getContents();
            Sms::where('id', $sms['id'])
                ->update([
                    'status' => $data['status']
                ]);
        }
    }
}
