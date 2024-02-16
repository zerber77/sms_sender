<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Sms;
use App\User;

class DeleteController extends Controller
{
    public function __invoke(User $user){
        $smss = Sms::query()->where('user_id',$user['id'])->get();
        foreach ($smss as $sms){
            $sms->delete();
        }
        $user->delete();
        return('Ok');
    }
}
