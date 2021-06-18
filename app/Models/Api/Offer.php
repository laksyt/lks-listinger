<?php


namespace App\Models\Api;


use Brick\Math\BigDecimal;

/**
 * Interface of Data Transfer Object, that represents external JSON data
 */
interface Offer
{

    public function getOfferId(): int;

    public function getProductTitle(): string;

    public function getVendorId(): int;

    public function getPrice(): BigDecimal;
}
