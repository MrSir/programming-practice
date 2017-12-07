<?php

namespace App\Models\People;

use App\Exceptions\MissingRequiredParameter;
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
        'lastName',
    ];

    /**
     * @var array $required
     */
    protected $required = [
        'firstName',
        'lastName',
    ];

    /**
     * @var array $serializable
     */
    protected $serializable = [
        'firstName',
        'lastName',
        'fullName',
    ];

    /**
     * This function creates a new Manager entity from the Employee
     * @return Manager
     * @throws MissingRequiredParameter
     */
    public function promote()
    {
        $manager = new Manager();

        return $manager->create($this->toArray());
    }

    /**
     * This function generates an array of Employee objects
     *
     * @param array $employeesArray
     *
     * @return array
     */
    public function convert(array $employeesArray)
    {
        $result = $this->massConvert(
            $employeesArray,
            self::class
        );

        // One would Log the $result['rejectedPeopleArray'] somewhere for
        // future reference and resolution

        return $result['peopleObjectArray'];
    }
}
