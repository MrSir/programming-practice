<?php
/**
 * Created by PhpStorm.
 * User: MrSir
 * Date: 12/6/2017
 * Time: 9:43 PM
 */

namespace App\Models\People;

/**
 * Class Manager
 * @package App\Models\People
 */
class Manager extends Employee
{
    /**
     * @var int $reportee
     */
    protected $reportee = 0;

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
}