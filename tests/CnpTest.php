<?php

namespace Filipac\Cnp\Tests;

use Filipac\Cnp\Cnp;

class CnpTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function testCnpValid()
    {
        $valid = Cnp::valid('1930101021162');
        $this->assertTrue($valid);

        $valid = Cnp::invalid('1930101021162');
        $this->assertFalse($valid);
    }


    /** @test */
    public function testCnpInvalid()
    {
        $invalid = Cnp::valid('1930101021161');
        $this->assertFalse($invalid);

        $invalid = Cnp::invalid('1930101021161');
        $this->assertTrue($invalid);
    }
}
