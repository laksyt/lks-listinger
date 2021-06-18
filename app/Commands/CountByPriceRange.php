<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CountByPriceRange extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'count_by_price_range {price_from : Lower bound on the price (required)} {price_to : Upper bound on the price (required)}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Count offerings within given price range';

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
