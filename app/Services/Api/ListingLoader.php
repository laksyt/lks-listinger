<?php


namespace App\Services\Api;


use App\Models\Api\Listing;

/**
 * The interface provides the contract for different readers
 * E.g. it can be XML/JSON Remote Endpoint, or CSV/JSON/XML local files
 */
interface ListingLoader
{

    /**
     * Read in incoming data and parse to objects
     */
    public function load(string $uri): Listing;
}
