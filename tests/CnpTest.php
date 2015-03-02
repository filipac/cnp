<?php
use Filipac\Cnp\Cnp;
 
class CnpTest extends PHPUnit_Framework_TestCase {
 
  /** @test */
  public function testNachHasCheese()
  {
    $nacho = new Cnp;
    $this->assertTrue($nacho->hasCheese(false));
  }
 
}
