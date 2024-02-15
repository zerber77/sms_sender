<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{

    protected $fillable = [
        'user_id','text', 'status', 'mode',
    ];

    static public function send($user, $message){
        $client = new Client();
        $url = "https://smsc.ru/sys/send.php?login=wolknot&psw=Smsc30577&phones=".$user['phone']."&mes=".$message." ".$user['name']."";
        $res = $client->request('GET', $url);
        return $res;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
