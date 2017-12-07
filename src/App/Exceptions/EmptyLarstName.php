<?php

namespace App\Exceptions;

use Exception;

/**
 * Class EmptyLastName
 * @package App\Exceptions
 */
class EmptyLastName extends Exception
{
    /**
     * EmptyLastName constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Empty last name.',
            200
        );
    }
}
