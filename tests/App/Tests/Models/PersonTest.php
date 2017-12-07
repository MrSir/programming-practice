<?php

namespace App\Tests\Models;

use App;
use App\Models\Person;
use PHPUnit\Framework\TestCase;
use TypeError;

class PersonTest extends TestCase
{
    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setFirstName
     * @group App.Models.Person.setFirstName.exists
     */
    public function testSetFirstNameExists() {
        $methods = get_class_methods(new Person());

        $this->assertContains('setFirstName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setFirstName
     * @group App.Models.Person.setFirstName.success
     */
    public function testSetFirstNameSuccess() {
        $person = new Person();
        $person->setFirstName('Joe');

        $this->assertEquals('Joe', $person->firstName);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setFirstName
     * @group App.Models.Person.setFirstName.failure
     * @group App.Models.Person.setFirstName.failure.null
     * @expectedException TypeError
     */
    public function testSetFirstNameFailureNull() {
        $person = new Person();
        $person->setFirstName(null);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setFirstName
     * @group App.Models.Person.setFirstName.failure
     * @group App.Models.Person.setFirstName.failure.blank
     * @expectedException App\Exceptions\EmptyFirstName
     */
    public function testSetFirstNameFailureBlank() {
        $person = new Person();
        $person->setFirstName('');
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setLastName
     * @group App.Models.Person.setLastName.exists
     */
    public function testSetLastNameExists() {
        $methods = get_class_methods(new Person());

        $this->assertContains('setLastName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setLastName
     * @group App.Models.Person.setLastName.success
     */
    public function testSetLastNameSuccess() {
        $person = new Person();
        $person->setLastName('Shmoe');

        $this->assertEquals('Shmoe', $person->lastName);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setLastName
     * @group App.Models.Person.setLastName.failure
     * @group App.Models.Person.setLastName.failure.null
     * @expectedException TypeError
     */
    public function testSetLastNameFailureNull() {
        $person = new Person();
        $person->setLastName(null);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.setLastName
     * @group App.Models.Person.setLastName.failure
     * @group App.Models.Person.setLastName.failure.blank
     * @expectedException App\Exceptions\EmptyLastName
     */
    public function testSetLastNameFailureBlank() {
        $person = new Person();
        $person->setLastName('');
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.getFirstName
     * @group App.Models.Person.getFirstName.exists
     */
    public function testGetFirstNameExists() {
        $methods = get_class_methods(new Person());

        $this->assertContains('getFirstName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.getFirstName
     * @group App.Models.Person.getFirstName.exists
     */
    public function testGetFirstNameSuccess() {
        $person = new Person();
        $person->setFirstName('Joe');

        $this->assertEquals('Joe', $person->getFirstName());
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.getLastName
     * @group App.Models.Person.getLastName.exists
     */
    public function testGetLastNameExists() {
        $methods = get_class_methods(new Person());

        $this->assertContains('getLastName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.getLastName
     * @group App.Models.Person.getLastName.exists
     */
    public function testGetLastNameSuccess() {
        $person = new Person();
        $person->setLastName('Shmoe');

        $this->assertEquals('Shmoe', $person->getLastName());
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.getFullName
     * @group App.Models.Person.getFullName.exists
     */
    public function testGetFullNameExists() {
        $methods = get_class_methods(new Person());

        $this->assertContains('getFullName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.Person
     * @group App.Models.Person.getFullName
     * @group App.Models.Person.getFullName.success
     */
    public function testGetFullNameSuccess() {
        $person = new Person();
        $person->setFirstName('Joe');
        $person->setLastName('Shmoe');

        $this->assertEquals('Joe Shmoe', $person->getFullName());
    }
}
