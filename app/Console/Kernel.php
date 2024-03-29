<?php

namespace App\Console;

use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        ////php artisan schedule:run
        $schedule->call(CollectBirthdays::class)->everyMinute();//    everyMinute();
        $schedule->call(SendBirthdaySms::class)->between('7:30', '9:00');
   /*     $schedule->call(function () {
            $users['phone'] = '564546654564';
            $users['name'] = '564654564564';
            $users['birth'] = Carbon::today();
            User::firstOrCreate($users);
        })->everyMinute();*/
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
