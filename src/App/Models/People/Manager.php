<?php

namespace App\Models\People;

use App\Exceptions\MissingRequiredParameter;

/**
 * Class Manager
 * @package App\Models\People
 */
class Manager extends Employee
{
    /**
     * @var int $reportee
     */
    public $reportee = 0;

    /**
     * @var array $filable
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'reportee'
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
        'reportee'
    ];

    /**
     * @return int
     */
    public function getReportee(): int
    {
        return $this->reportee;
    }

    /**
     * @param int $reportee
     */
    public function setReportee(int $reportee)
    {
        $this->reportee = $reportee;
    }

    /**
     * This function generates an array of Manager objects
     *
     * @param array $managersArray
     *
     * @return array
     */
    public function convert(array $managersArray)
    {
        $result = $this->massConvert(
            $managersArray,
            self::class
        );

        // One would Log the $result['rejectedPeopleArray'] somewhere for
        // future reference and resolution

        return $result['peopleObjectArray'];
    }
}
