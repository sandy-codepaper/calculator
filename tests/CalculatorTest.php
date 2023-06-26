<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use SandyCalculator\Calculator;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        
        $result = $calculator->add(2, 3);
        
        $this->assertEquals(5, $result);
    }
    
    public function testSubtraction()
    {
        $calculator = new Calculator();
        
        $result = $calculator->subtract(5, 3);
        
        $this->assertEquals(2, $result);
    }
    
    public function testMultiplication()
    {
        $calculator = new Calculator();
        
        $result = $calculator->multiply(4, 2);
        
        $this->assertEquals(8, $result);
    }
    
    public function testDivision()
    {
        $calculator = new Calculator();
        
        $result = $calculator->divide(10, 2);
        
        $this->assertEquals(5, $result);
    }
}
