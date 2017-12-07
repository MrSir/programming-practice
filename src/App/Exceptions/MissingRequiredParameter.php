<?php

namespace App\Exceptions;

use Exception;

/**
 * Class MissingRequiredParameter
 * @package App\Exceptions
 */
class MissingRequiredParameter extends Exception
{
    /**
     * MissingRequiredParameter constructor.
     */
    public function __construct($param)
    {
        parent::__construct(
            "The {$param} parameter is required.",
            300
        );
    }
}