<?php


namespace App\Services;


use App\Models\Api\Listing;
use App\Models\CollectionListing;
use Illuminate\Support\Facades\Http;

class HttpListingLoader implements Api\ListingLoader
{

    /**
     * @inheritDoc
     */
    public function load(string $uri): Listing
    {
        return new CollectionListing(Http::get($uri));
    }
}
