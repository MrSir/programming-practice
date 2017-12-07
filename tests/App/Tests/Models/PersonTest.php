<?php

namespace App\Tests\Models;

use App\Exceptions\EmptyFirstName;
use App\Models\Person;
use PHPUnit\Framework\TestCase;
use TypeError;

class PersonTest extends TestCase
{
    /**
     * @group App.Models.Person.setFirstName.exists
     */
    public function testSetFirstNameExists() {
        $methods = get_class_methods(new Person());

        $this->assertContains('setFirstName', $methods);
    }

    /**
     * @group App.Models.Person.setFirstName.success
     */
    public function testSetFirstNameSuccess() {
        $person = new Person();
        $person->setFirstName('Joe');

        $this->assertEquals('Joe', $person->firstName);
    }

    /**
     * @group App.Models.Person.setFirstName.failure.null
     * @expectedException TypeError
     */
    public function testSetFirstNameFailureNull() {
        $person = new Person();
        $person->setFirstName(null);
    }

    /**
     * @group App.Models.Person.setFirstName.failure.blank
     * @expectedException EmptyFirstName
     */
    public function testSetFirstNameFailureBlank() {
        $person = new Person();
        $person->setFirstName('');
    }
}