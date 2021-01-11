<?php
use code\Complex;
use code\ComplexMath;

class ComplexTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testSum()
    {
        $sum = ComplexMath::sum(
            new Complex(5,2.3),
            new Complex(3,3)
        );

        $this->assertEquals('8+5.3i',$sum->toString());
        $this->assertEquals(8,$sum->getReal());
        $this->assertEquals(5.3,$sum->getImaginaryMagnitude());
    }

    public function testSubtract()
    {
        $sum = ComplexMath::subtract(
            new Complex(3,-3),
            new Complex(17,5)
        );

        $this->assertEquals('-14-8i',$sum->toString());
        $this->assertEquals(-14,$sum->getReal());
        $this->assertEquals(-8,$sum->getImaginaryMagnitude());
    }

    public function testMultiply()
    {
        $sum = ComplexMath::multiply(
            new Complex(2,-3),
            new Complex(1,5)
        );

        $this->assertEquals('17+7i',$sum->toString());
        $this->assertEquals(17,$sum->getReal());
        $this->assertEquals(7,$sum->getImaginaryMagnitude());
    }

    public function testDivide()
    {
        $sum = ComplexMath::divide(
            new Complex(3,2),
            new Complex(5,-3)
        );

        $this->assertEquals('0.26+0.56i',$sum->toString());
        $this->assertEquals(0.26,$sum->getReal());
        $this->assertEquals(0.56,$sum->getImaginaryMagnitude());
        $this->assertIsFloat($sum->getReal());
    }
}