<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CountByVendorId extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'count_by_vendor_id {vendor_id : ID of vendor (required)}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Count offerings by given vendor';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
