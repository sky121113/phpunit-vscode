<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * CalculatorTest
 * @group Calculator
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function testAdd()
    {
        // arrange
        $target = new Calculator();
        $expected = 2 ;

        // act 
        $actual = $target->add(1, 1);

        // assert
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function testSub()
    {
         // arrange
         $target = new Calculator();
         $expected = 2 ;
 
         // act 
         $actual = $target->sub(3, 1);
 
         // assert
         $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function testSum()
    {
       // arrange
       $target = new Calculator();
       $expected = 25 ;

       // act 
       $actual = $target->sum([1,3,5,7,9]);

       // assert
       $this->assertEquals($expected, $actual);
    }
    
    
}
