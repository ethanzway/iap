<?php

namespace Ethanzway\IAP\ValueObjects;

/**
 * ExpirationIntent class
 * The reason a subscription expired
 */
final class ExpirationIntent
{
    public const VOLUNTARY_CANCEL = 1;
    public const BILLING_ERROR = 2;
    public const DID_NOT_AGREE_PRICE_INCREASE = 3;
    public const PRODUCT_UNAVAILABLE = 4;
    public const UNKNOWN_ERROR = 5;

    /**
     * @var int
     */
    private $value;

    /**
     * ExpirationIntent constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}
