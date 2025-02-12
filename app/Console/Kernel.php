<?php

namespace App\Console;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {

            // your schedule code
            //Log::info('Working');

            $allSubscriptions = Subscription::get();

            foreach ($allSubscriptions as $allSubscription)
            {
                if(Carbon::now()->startOfDay()->gte($allSubscription->end_date)) {
                    $allSubscription->update([
                        'is_expired' => Subscription::EXPIRED_YES
                    ]);
                }
            }

        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
