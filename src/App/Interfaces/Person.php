<?php
/**
 * Created by PhpStorm.
 * User: MrSir
 * Date: 12/6/2017
 * Time: 9:24 PM
 */

namespace App\Interfaces;

use App\Models\Person as PersonModel;

/**
 * Interface Person
 * @package App\Interfaces
 */
interface Person
{
    /**
     * The signature for the factory paradigm create function
     * @param array $params
     *
     * @return PersonModel
     */
    public function create(array $params) : PersonModel;

    /**
     * The first name setter function signature
     *
     * @param string $name
     *
     * @return mixed
     */
    public function setFirstName(string $name);

    /**
     * The first name getter function signature
     * @return string
     */
    public function getFirstName(): string;

    /**
     * The last name setter function signature
     *
     * @param string $name
     *
     * @return mixed
     */
    public function setLastName(string $name);

    /**
     * The last name getter function signature
     * @return string
     */
    public function getLastName(): string;

    /**
     * The full name getter function signature
     * @return string
     */
    public function getFullName(): string;

    /**
     * The signature for the toJSON function which serializes the Person into a json string.
     * @return string
     */
    public function toJSON(): string;
}
