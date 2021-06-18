<?php


namespace App\Models;


use Brick\Math\BigDecimal;

class BasicOffer implements Api\Offer
{

    private int $offerId;
    private string $productTitle;
    private int $vendorId;
    private BigDecimal $price;

    /**
     * BasicOffer constructor.
     * @param int $offerId
     * @param string $productTitle
     * @param int $vendorId
     * @param BigDecimal $price
     */
    public function __construct(
        int $offerId,
        string $productTitle,
        int $vendorId,
        BigDecimal $price
    ) {
        $this->offerId = $offerId;
        $this->productTitle = $productTitle;
        $this->vendorId = $vendorId;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getOfferId(): int
    {
        return $this->offerId;
    }

    /**
     * @return string
     */
    public function getProductTitle(): string
    {
        return $this->productTitle;
    }

    /**
     * @return int
     */
    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    /**
     * @return BigDecimal
     */
    public function getPrice(): BigDecimal
    {
        return $this->price;
    }
}
