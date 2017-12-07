<?php

namespace App\Tests\Models\People;

use App;
use App\Models\People\Employee;
use PHPUnit\Framework\TestCase;
use TypeError;

class EmployeeTest extends TestCase
{
    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setFirstName
     * @group App.Models.People.Employee.setFirstName.exists
     */
    public function testSetFirstNameExists() {
        $methods = get_class_methods(new Employee());

        $this->assertContains('setFirstName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setFirstName
     * @group App.Models.People.Employee.setFirstName.success
     */
    public function testSetFirstNameSuccess() {
        $person = new Employee();
        $person->setFirstName('Joe');

        $this->assertEquals('Joe', $person->firstName);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setFirstName
     * @group App.Models.People.Employee.setFirstName.failure
     * @group App.Models.People.Employee.setFirstName.failure.null
     * @expectedException TypeError
     */
    public function testSetFirstNameFailureNull() {
        $person = new Employee();
        $person->setFirstName(null);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setFirstName
     * @group App.Models.People.Employee.setFirstName.failure
     * @group App.Models.People.Employee.setFirstName.failure.blank
     * @expectedException App\Exceptions\EmptyFirstName
     */
    public function testSetFirstNameFailureBlank() {
        $person = new Employee();
        $person->setFirstName('');
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setLastName
     * @group App.Models.People.Employee.setLastName.exists
     */
    public function testSetLastNameExists() {
        $methods = get_class_methods(new Employee());

        $this->assertContains('setLastName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setLastName
     * @group App.Models.People.Employee.setLastName.success
     */
    public function testSetLastNameSuccess() {
        $person = new Employee();
        $person->setLastName('Shmoe');

        $this->assertEquals('Shmoe', $person->lastName);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setLastName
     * @group App.Models.People.Employee.setLastName.failure
     * @group App.Models.People.Employee.setLastName.failure.null
     * @expectedException TypeError
     */
    public function testSetLastNameFailureNull() {
        $person = new Employee();
        $person->setLastName(null);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setLastName
     * @group App.Models.People.Employee.setLastName.failure
     * @group App.Models.People.Employee.setLastName.failure.blank
     * @expectedException App\Exceptions\EmptyLastName
     */
    public function testSetLastNameFailureBlank() {
        $person = new Employee();
        $person->setLastName('');
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFirstName
     * @group App.Models.People.Employee.getFirstName.exists
     */
    public function testGetFirstNameExists() {
        $methods = get_class_methods(new Employee());

        $this->assertContains('getFirstName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFirstName
     * @group App.Models.People.Employee.getFirstName.exists
     */
    public function testGetFirstNameSuccess() {
        $person = new Employee();
        $person->setFirstName('Joe');

        $this->assertEquals('Joe', $person->getFirstName());
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getLastName
     * @group App.Models.People.Employee.getLastName.exists
     */
    public function testGetLastNameExists() {
        $methods = get_class_methods(new Employee());

        $this->assertContains('getLastName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getLastName
     * @group App.Models.People.Employee.getLastName.exists
     */
    public function testGetLastNameSuccess() {
        $person = new Employee();
        $person->setLastName('Shmoe');

        $this->assertEquals('Shmoe', $person->getLastName());
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFullName
     * @group App.Models.People.Employee.getFullName.exists
     */
    public function testGetFullNameExists() {
        $methods = get_class_methods(new Employee());

        $this->assertContains('getFullName', $methods);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFullName
     * @group App.Models.People.Employee.getFullName.success
     */
    public function testGetFullNameSuccess() {
        $person = new Employee();
        $person->setFirstName('Joe');
        $person->setLastName('Shmoe');

        $this->assertEquals('Joe Shmoe', $person->getFullName());
    }
}
