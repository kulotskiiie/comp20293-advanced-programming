<?php
require_once __DIR__ . '/../src/Simple_2.php';

class Simple_2_Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Simple_2_Test();
        $simple2->setName('RoseKyla');
        $this->assertEquals($simple2->getName(), 'RoseKyla');
    }

    public function testGetAge()
    {
        $simple2 = new Simple_2_Test();
        $simple2->setAge(21);
        $this->assertEquals($simple2->getAge(), 21);
    }

    public function testFaveColor()
    {
        $simple2 = new Simple_2_Test();
        $simple2->setFaveColor('Yellow');
        $this->assertEquals($simple2->getFaveColor(), 'Yellow');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Simple_2_Test();
        $simple2 ->setName('RoseKyla');
        $this->assertIsString($simple2->getName(), 'RoseKyla');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Simple_2_Test();
        $simple2->setAge(21);
        $this->assertIsInt($simple2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Simple_2_Test();
        $simple2->setAge(21);
        $this->assertIsNumeric($simple2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Simple_2_Test();
        $simple2->setFaveColor('Yellow');
        $this->assertIsString($simple2->getFaveColor(), 'Yellow');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Simple_2_Test();
        $simple2->setTogetherInput('RoseKyla', 21, 'Yellow');
        $this->assertEquals($simple2->getTogetherInput(), 'RoseKyla', 21, 'Yellow');
    }

}