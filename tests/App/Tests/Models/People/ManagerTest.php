<?php

namespace App\Tests\Models\People;

use App;
use App\Models\People\Manager;
use PHPUnit\Framework\TestCase;
use TypeError;

class ManagerTest extends TestCase
{
    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setFirstName
     * @group App.Models.People.Manager.setFirstName.exists
     */
    public function testSetFirstNameExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'setFirstName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setFirstName
     * @group App.Models.People.Manager.setFirstName.success
     */
    public function testSetFirstNameSuccess()
    {
        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setFirstName
     * @group App.Models.People.Manager.setFirstName.failure
     * @group App.Models.People.Manager.setFirstName.failure.null
     * @expectedException TypeError
     */
    public function testSetFirstNameFailureNull()
    {
        $person = new Manager();
        $person->setFirstName(null);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setFirstName
     * @group App.Models.People.Manager.setFirstName.failure
     * @group App.Models.People.Manager.setFirstName.failure.blank
     * @expectedException App\Exceptions\EmptyFirstName
     * @expectedExceptionMessage Empty first name.
     * @expectedExceptionCode 100
     */
    public function testSetFirstNameFailureBlank()
    {
        $person = new Manager();
        $person->setFirstName('');
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setLastName
     * @group App.Models.People.Manager.setLastName.exists
     */
    public function testSetLastNameExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'setLastName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setLastName
     * @group App.Models.People.Manager.setLastName.success
     */
    public function testSetLastNameSuccess()
    {
        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setLastName
     * @group App.Models.People.Manager.setLastName.failure
     * @group App.Models.People.Manager.setLastName.failure.null
     * @expectedException TypeError
     */
    public function testSetLastNameFailureNull()
    {
        $person = new Manager();
        $person->setLastName(null);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setLastName
     * @group App.Models.People.Manager.setLastName.failure
     * @group App.Models.People.Manager.setLastName.failure.blank
     * @expectedException App\Exceptions\EmptyLastName
     * @expectedExceptionMessage Empty last name.
     * @expectedExceptionCode 200
     */
    public function testSetLastNameFailureBlank()
    {
        $person = new Manager();
        $person->setLastName('');
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getFirstName
     * @group App.Models.People.Manager.getFirstName.exists
     */
    public function testGetFirstNameExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'getFirstName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getFirstName
     * @group App.Models.People.Manager.getFirstName.exists
     */
    public function testGetFirstNameSuccess()
    {
        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getLastName
     * @group App.Models.People.Manager.getLastName.exists
     */
    public function testGetLastNameExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'getLastName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getLastName
     * @group App.Models.People.Manager.getLastName.exists
     */
    public function testGetLastNameSuccess()
    {
        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getFullName
     * @group App.Models.People.Manager.getFullName.exists
     */
    public function testGetFullNameExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'getFullName',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getFullName
     * @group App.Models.People.Manager.getFullName.success
     */
    public function testGetFullNameSuccess()
    {
        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setReportee
     * @group App.Models.People.Manager.setReportee.exists
     */
    public function testSetReporteeExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'setReportee',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.setReportee
     * @group App.Models.People.Manager.setReportee.success
     */
    public function testSetReporteeSuccess()
    {
        $person = new Manager();
        $person->setReportee(1);

        $this->assertEquals(
            1,
            $person->reportee
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getReportee
     * @group App.Models.People.Manager.getReportee.exists
     */
    public function testGetReporteeExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'getReportee',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getReportee
     * @group App.Models.People.Manager.getReportee.success
     */
    public function testGetReporteeSuccess()
    {
        $person = new Manager();
        $person->setReportee(1);

        $this->assertEquals(
            1,
            $person->getReportee()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.getReportee
     * @group App.Models.People.Manager.getReportee.success
     * @group App.Models.People.Manager.getReportee.success.default
     */
    public function testGetReporteeSuccessDefault()
    {
        $person = new Manager();

        $this->assertEquals(
            0,
            $person->getReportee()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.toArray
     * @group App.Models.People.Manager.toArray.exists
     */
    public function testToArrayExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'toArray',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.toArray
     * @group App.Models.People.Manager.toArray.success
     */
    public function testToArraySuccess()
    {
        $array = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
            'reportee' => 0
        ];

        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.toJSON
     * @group App.Models.People.Manager.toJSON.exists
     */
    public function testToJSONExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'toJSON',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.toJSON
     * @group App.Models.People.Manager.toJSON.success
     */
    public function testToJSONSuccess()
    {
        $array = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
            'reportee' => 1
        ];

        $person = new Manager();
        $person->setFirstName($array['firstName']);
        $person->setLastName($array['lastName']);
        $person->setReportee($array['reportee']);

        $this->assertEquals(
            json_encode($array),
            $person->toJSON()
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.create
     * @group App.Models.People.Manager.create.exists
     */
    public function testCreateManagerExists()
    {
        $methods = get_class_methods(new Manager());

        $this->assertContains(
            'create',
            $methods
        );
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.create
     * @group App.Models.People.Manager.create.success
     */
    public function testCreateManagerSuccess()
    {
        $params = [
            'firstName' => 'Joe',
            'lastName' => 'Shmoe',
            'fullName' => 'Joe Shmoe',
            'reportee' => 1
        ];

        $person = new Manager();
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
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.create
     * @group App.Models.People.Manager.create.failure
     * @group App.Models.People.Manager.create.failure.firstName
     * @expectedException App\Exceptions\MissingRequiredParameter
     * @expectedExceptionMessage The firstName parameter is required
     * @expectedExceptionCode 300
     */
    public function testCreateManagerFailureFirstName()
    {
        $params = [
            'lastName' => 'Shmoe',
        ];

        $person = new Manager();
        $person->create($params);
    }

    /**
     * @group App
     * @group App.Models
     * @group App.Models.People
     * @group App.Models.People.Manager
     * @group App.Models.People.Manager.create
     * @group App.Models.People.Manager.create.failure
     * @group App.Models.People.Manager.create.failure.lastName
     * @expectedException App\Exceptions\MissingRequiredParameter
     * @expectedExceptionMessage The lastName parameter is required
     * @expectedExceptionCode 300
     */
    public function testCreateManagerFailureLastName()
    {
        $params = [
            'firstName' => 'Joe',
        ];

        $person = new Manager();
        $person->create($params);
    }
}
