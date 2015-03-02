<?php
use Filipac\Cnp\Cnp;

class CnpTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function testCnpValid()
    {
        $valid = Cnp::valid('1930101021162');
        $this->assertTrue($valid);
    }


    /** @test */
    public function testCnpInvalid()
    {
        $valid = Cnp::valid('1930101021161');
        $this->assertFalse($valid);
    }

}
