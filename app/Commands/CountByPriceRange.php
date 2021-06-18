<?php

namespace App\Commands;

use App\Commands\Base\CountingCommand;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CountByPriceRange extends CountingCommand
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
     * @return void
     */
    public function handle()
    {
        $this->info(2);
    }
}
