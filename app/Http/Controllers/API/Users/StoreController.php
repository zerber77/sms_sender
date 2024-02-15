<?php

namespace App\Http\Controllers\API\Users;

use App\Console\SendSms;
use App\Http\Controllers\Controller;
use App\User;
use App\Users;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class StoreController extends Controller
{
    public function __invoke(UserRequest $request){//

        $data = $request->validated();
        dd($data);
        Users::firstOrCreate($data);
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }
}

