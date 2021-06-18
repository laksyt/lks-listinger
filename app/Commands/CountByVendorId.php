<?php

namespace App\Commands;

use App\Commands\Base\CountingCommand;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CountByVendorId extends CountingCommand
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
     * @return void
     */
    public function handle()
    {
        $this->info(2);
    }
}
