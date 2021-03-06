<?php


namespace App\Models\Api;


use Closure;
use Iterator;

/**
 * Interface for The Collection class that contains Offers
 */
interface Listing {

    public function get(int $index): Offer;

    public function getIterator(): Iterator;

    public function countMatching(Closure $predicate): int;
}
