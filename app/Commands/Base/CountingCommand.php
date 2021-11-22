<?php


namespace App\Commands\Base;


use App\Services\Api\ListingLoader;
use LaravelZero\Framework\Commands\Command;

abstract class CountingCommand extends Command
{

    protected ListingLoader $listingLoader;

    protected string $endpointUrl = 'localhost:8777/listings';

    /**
     * CountingCommand constructor.
     * @param ListingLoader $listingLoader
     */
    public function __construct(ListingLoader $listingLoader)
    {
        parent::__construct();
        $this->listingLoader = $listingLoader;
    }
}
