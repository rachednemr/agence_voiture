<?php
namespace Tuto\AnimeauxBundle\Tests\buisness;
use Tuto\AnimeauxBundle\buisness\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_addShouldAdditionTwoNumbers(){
        $calc = new Calculator();
        $expected = 5;
        $this->assertEquals($calc->add(2, 3), $expected);
    }

}

?>
