<?php


namespace App\Models;


use App\Models\Api\Offer;
use Brick\Math\BigDecimal;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Iterator;

class CollectionListing implements Api\Listing
{

    private Collection $collection;

    /**
     * CollectionsListing constructor.
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->collection = $response->collect()->map(function ($item) {
            return new BasicOffer(
                offerId: $item['offerId'],
                productTitle: $item['productTitle'],
                vendorId: $item['vendorId'],
                price: BigDecimal::of($item['price']),
            );
        });
    }

    public function get(int $index): Offer
    {
        return $this->collection->get($index);
    }

    public function getIterator(): Iterator
    {
        return $this->collection->getIterator();
    }
}
