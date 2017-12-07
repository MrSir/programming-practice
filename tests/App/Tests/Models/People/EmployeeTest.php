<?php

namespace App\Tests\Models\People;

use App;
use App\Models\People\Employee;
use App\Models\People\Manager;
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
    public function testSetFirstNameExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'setFirstName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setFirstName
     * @group App.Models.People.Employee.setFirstName.success
     */
    public function testSetFirstNameSuccess()
    {
        $person = new Employee();
        $person->setFirstName('Joe');

        $this->assertEquals(
            'Joe',
            $person->firstName
        );
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
    public function testSetFirstNameFailureNull()
    {
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
     * @expectedExceptionMessage Empty first name.
     * @expectedExceptionCode 100
     */
    public function testSetFirstNameFailureBlank()
    {
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
    public function testSetLastNameExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'setLastName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.setLastName
     * @group App.Models.People.Employee.setLastName.success
     */
    public function testSetLastNameSuccess()
    {
        $person = new Employee();
        $person->setLastName('Shmoe');

        $this->assertEquals(
            'Shmoe',
            $person->lastName
        );
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
    public function testSetLastNameFailureNull()
    {
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
     * @expectedExceptionMessage Empty last name.
     * @expectedExceptionCode 200
     */
    public function testSetLastNameFailureBlank()
    {
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
    public function testGetFirstNameExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'getFirstName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFirstName
     * @group App.Models.People.Employee.getFirstName.exists
     */
    public function testGetFirstNameSuccess()
    {
        $person = new Employee();
        $person->setFirstName('Joe');

        $this->assertEquals(
            'Joe',
            $person->getFirstName()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getLastName
     * @group App.Models.People.Employee.getLastName.exists
     */
    public function testGetLastNameExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'getLastName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getLastName
     * @group App.Models.People.Employee.getLastName.exists
     */
    public function testGetLastNameSuccess()
    {
        $person = new Employee();
        $person->setLastName('Shmoe');

        $this->assertEquals(
            'Shmoe',
            $person->getLastName()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFullName
     * @group App.Models.People.Employee.getFullName.exists
     */
    public function testGetFullNameExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'getFullName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.getFullName
     * @group App.Models.People.Employee.getFullName.success
     */
    public function testGetFullNameSuccess()
    {
        $person = new Employee();
        $person->setFirstName('Joe');
        $person->setLastName('Shmoe');

        $this->assertEquals(
            'Joe Shmoe',
            $person->getFullName()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.toArray
     * @group App.Models.People.Employee.toArray.exists
     */
    public function testToArrayExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'toArray',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.toArray
     * @group App.Models.People.Employee.toArray.success
     */
    public function testToArraySuccess()
    {
        $array = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
        ];

        $person = new Employee();
        $person->setFirstName($array['firstName']);
        $person->setLastName($array['lastName']);

        $this->assertEquals(
            $array,
            $person->toArray()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.toJSON
     * @group App.Models.People.Employee.toJSON.exists
     */
    public function testToJSONExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'toJSON',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.toJSON
     * @group App.Models.People.Employee.toJSON.success
     */
    public function testToJSONSuccess()
    {
        $array = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
        ];

        $person = new Employee();
        $person->setFirstName($array['firstName']);
        $person->setLastName($array['lastName']);

        $this->assertEquals(
            json_encode($array),
            $person->toJSON()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.create
     * @group App.Models.People.Employee.create.exists
     */
    public function testCreateEmployeeExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'create',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.create
     * @group App.Models.People.Employee.create.success
     */
    public function testCreateEmployeeSuccess()
    {
        $params = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
        ];

        $person = new Employee();
        $person->create($params);

        $this->assertEquals(
            $params,
            $person->toArray()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.create
     * @group App.Models.People.Employee.create.failure
     * @group App.Models.People.Employee.create.failure.firstName
     * @expectedException App\Exceptions\MissingRequiredParameter
     * @expectedExceptionMessage The firstName parameter is required
     * @expectedExceptionCode 300
     */
    public function testCreateEmployeeFailureFirstName()
    {
        $params = [
            'lastName' => 'Shmoe',
        ];

        $person = new Employee();
        $person->create($params);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.create
     * @group App.Models.People.Employee.create.failure
     * @group App.Models.People.Employee.create.failure.lastName
     * @expectedException App\Exceptions\MissingRequiredParameter
     * @expectedExceptionMessage The lastName parameter is required
     * @expectedExceptionCode 300
     */
    public function testCreateEmployeeFailureLastName()
    {
        $params = [
            'firstName' => 'Joe',
        ];

        $person = new Employee();
        $person->create($params);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.promote
     * @group App.Models.People.Employee.promote.exists
     */
    public function testPromoteEmployeeExists()
    {
        $methods = get_class_methods(new Employee());

        $this->assertContains(
            'promote',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.promote
     * @group App.Models.People.Employee.promote.success
     */
    public function testPromoteEmployeeSuccess()
    {
        $params = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
        ];

        $person = new Employee();
        $person->create($params);

        $manager = $person->promote();

        $this->assertEquals(
            Manager::class,
            get_class($manager)
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Employee
     * @group App.Models.People.Employee.promote
     * @group App.Models.People.Employee.promote.failure
     * @expectedException TypeError
     */
    public function testPromoteEmployeeFailure()
    {
        $person = new Employee();

        $manager = $person->promote();

        $this->assertEquals(
            Manager::class,
            get_class($manager)
        );
    }
}
