<?php
/**
 * Created by PhpStorm.
 * User: MrSir
 * Date: 12/6/2017
 * Time: 9:43 PM
 */

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