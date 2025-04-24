<?php
use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->calculate("2+3"));
    }

    public function testSubtraction() {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->calculate("5-3"));
    }

    public function testMultiplication() {
        $calc = new Calculator();
        $this->assertEquals(6, $calc->calculate("2*3"));
    }

    public function testDivision() {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->calculate("8/2"));
    }

    public function testDivisionByZero() {
        $this->expectException(\RuntimeException::class);
        $calc = new Calculator();
        $calc->calculate("5/0");
    }
}
