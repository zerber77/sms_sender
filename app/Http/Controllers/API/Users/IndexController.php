<?php

namespace App\Http\Controllers\API\Users;

use App\Console\SendSms;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
    $users = User::all();
        return($users);
    }
}

