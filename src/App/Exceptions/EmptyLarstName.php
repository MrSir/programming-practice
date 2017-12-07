<?php
/**
 * Created by PhpStorm.
 * User: MrSir
 * Date: 12/6/2017
 * Time: 9:44 PM
 */

namespace App\Exceptions;

use Exception;

/**
 * Class EmptyLastName
 * @package App\Exceptions
 */
class EmptyLastName extends Exception
{
    /**
     * EmptyFirstName constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Empty last name.',
            100
        );
    }
}