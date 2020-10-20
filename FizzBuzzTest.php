<?php
require "vendor/autoload.php";
require "FizzBuzz.php";

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function  test_count_given1_shouldReturn1(){
        $actual = $this->fizzBuzz->count(1);

        $this->assertEquals("1", $actual);  //Exemple : $this->assertTrue(true);$this->assertEquals(true, true);
    }

    public function test_count_given2_shouldReturn2(){$actual = $this->fizzBuzz->count(2);

        $this->assertEquals("2", $actual);
    }
}