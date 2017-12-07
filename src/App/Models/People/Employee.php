<?php

namespace App\Models\People;

use App\Models\Person;

/**
 * Class Employee
 * @package App\Models\People
 */
class Employee extends Person
{
    /**
     * @var array $filable
     */
    protected $fillable = [
        'firstName',
        'lastName'
    ];

    /**
     * @var array $required
     */
    protected $required = [
        'firstName',
        'lastName'
    ];

    /**
     * @var array $serializable
     */
    protected $serializable = [
        'firstName',
        'lastName',
        'fullName',
    ];
}