<?php


class CalculatorTest extends \PHPUnit\Framework\TestCase {
  public function testAdd() {
    $calculator = new App\Calculator;
    $result = $calculator->add(20,5);

    $this->assertEquals(25, $result);
  }

  public function testSubtract() {
    $calculator = new App\Calculator;
    $result = $calculator->subtract(75,35);

    $this->assertEquals(40, $result);
  }

  public function testMultiply() {
    $calculator = new App\Calculator;
    $result = $calculator->multiply(10.5,5);

    $this->assertEquals(52.5, $result);
  }

  public function testDivide() {
    $calculator = new App\Calculator;
    $result = $calculator->divide(67,5);

    $this->assertEquals(13.4, $result);
  }
}


?>
