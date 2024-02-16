<?php


namespace App\Console;


use App\Sms;
use App\User;
use Carbon\Carbon;
use Carbon\Traits\Creator;

class CollectBirthdays
{
    public function __invoke(){
        $today =  Carbon::today()->format('m-d');
        $birthDate =  Carbon::today()->addDays(7)->format('m-d');
        $users = User::query()->where('birth', 'like', '%'.$birthDate.'%')->get();
        foreach ($users as $user){
            if (!Sms::query()
                ->where('user_id', $user['id'])
                ->where('text', 'C Днем рождения,')
                ->where('created_at', 'like', '%'.$today.'%')
                ->get()->count()){
                $message = 'C Днем рождения,';
                $data['user_id'] = $user['id'];
                $data['text'] = $message;
                $data['status'] = "ToSend";
                $data['mode'] = "Автоматический";
                Sms::firstOrCreate($data);
            }
        }
    }
}
