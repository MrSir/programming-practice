<?php

namespace App\Models;

use App\Exceptions\EmptyFirstName;
use App\Exceptions\EmptyLastName;
use App\Exceptions\MissingRequiredParameter;
use App\Interfaces\Person as PersonInterface;

class Person implements PersonInterface
{
    /**
     * @var string $firstName
     */
    public $firstName;

    /**
     * @var string $lastName
     */
    public $lastName;

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

    /**
     * The create function
     *
     * @param array $params
     *
     * @throws MissingRequiredParameter
     * @return Person
     */
    public function create(array $params): Person
    {
        // check the required parameters are present
        foreach ($this->required as $requiredKey) {
            $condition = !in_array($requiredKey, $params);

            if ($condition) {
                throw new MissingRequiredParameter($requiredKey);
            }
        }

        // populate the fillable attributes
        foreach ($this->fillable as $fillableKey) {
            $value = $params[$fillableKey];
            $method = 'set' . ucfirst($fillableKey);

            $this->$method($value);
        }

        return $this;
    }

    /**
     * The first name setter function signature
     *
     * @param string $name
     *
     * @throws EmptyFirstName
     * @return void
     */
    public function setFirstName(string $name)
    {
        if ($name === '') {
            throw new EmptyFirstName();
        }

        $this->firstName = $name;
    }

    /**
     * The first name getter function signature
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * The last name setter function signature
     *
     * @param string $name
     *
     * @throws EmptyLastName
     * @return mixed
     */
    public function setLastName(string $name)
    {
        if ($name === '') {
            throw new EmptyLastName();
        }

        $this->lastName = $name;
    }

    /**
     * The last name getter function signature
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * The full name getter function signature
     * @return string
     */
    public function getFullName(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    /**
     * The signature for the toJSON function which serializes the Person into a json string.
     * @return string
     */
    public function toJSON(): string
    {
        $serializedObject = [];

        foreach ($this->serializable as $field) {
            $method = 'get' . ucfirst($field);

            $serializedObject[$field] = $this->$method();
        }

        return json_encode($serializedObject);
    }
}
