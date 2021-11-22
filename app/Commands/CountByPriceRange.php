<?php

namespace App\Commands;

use App\Commands\Base\CountingCommand;
use App\Models\Api\Offer;
use App\Services\HttpListingLoader;
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
        $this->info(
            $this->listingLoader->load($this->endpointUrl)->countMatching(function (Offer $offer) {
                return ($offer->getPrice()->compareTo($this->argument('price_from')) >= 0)
                    && ($offer->getPrice()->compareTo($this->argument('price_to')) <= 0);
            })
        );
    }
}
