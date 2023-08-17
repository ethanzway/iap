<?php

namespace Ethanzway\IAP\Exceptions;

use Exception;
use Ethanzway\IAP\ValueObjects\Status;

/**
 * Class InvalidReceiptException
 * @package Ethanzway\IAP\Exceptions
 */
class InvalidReceiptException extends Exception
{
    const ERROR_STATUS_MAP = Status::ERROR_STATUS_MAP;

    /**
     * @param int $status
     * @return InvalidReceiptException
     */
    public static function create(int $status): self
    {
        $msg = self::ERROR_STATUS_MAP[$status];

        return new self($msg, $status);
    }
}
