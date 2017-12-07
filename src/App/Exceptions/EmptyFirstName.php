<?php

namespace App\Exceptions;

use Exception;

/**
 * Class EmptyFirstName
 * @package App\Exceptions
 */
class EmptyFirstName extends Exception
{
    /**
     * EmptyFirstName constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Empty first name.',
            100
        );
    }
}
