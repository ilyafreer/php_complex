<?php

use code\ComplexAlgebraic;
use code\ComplexTrigonometry;
use code\ComplexMath;
use Codeception\Test\Unit;

class ComplexTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testSumAlgebraic()
    {
        $sum = ComplexMath::sum(
            new ComplexAlgebraic(5, 2.3),
            new ComplexAlgebraic(3, 3)
        );

        $this->assertEquals('8+5.3i', $sum->toString());
        $this->assertEquals(8, $sum->getReal());
        $this->assertEquals(5.3, $sum->getImaginaryMagnitude());
    }

    public function testSumTrigonometry()
    {
        $sum = ComplexMath::sum(
            new ComplexTrigonometry(5, -2.3),
            new ComplexTrigonometry(3, -3)
        );

        $this->assertEquals('9.6(Cos(-0.59)+iSin(-0.59))', $sum->toString());
    }

    public function testSubtractAlgebraic()
    {
        $sum = ComplexMath::subtract(
            new ComplexAlgebraic(3, -3),
            new ComplexAlgebraic(17, 5)
        );

        $this->assertEquals('-14-8i', $sum->toString());
        $this->assertEquals(-14, $sum->getReal());
        $this->assertEquals(-8, $sum->getImaginaryMagnitude());
    }

    public function testSubtractTrigonometry()
    {
        $sum = ComplexMath::subtract(
            new ComplexTrigonometry(3, -3),
            new ComplexTrigonometry(17, 5)
        );

        $this->assertEquals('16.12(Cos(-2.62)+iSin(-2.62))', $sum->toString());
    }

    public function testMultiplyAlgebraic()
    {
        $sum = ComplexMath::multiply(
            new ComplexAlgebraic(2, -3),
            new ComplexAlgebraic(1, 5)
        );

        $this->assertEquals('17+7i', $sum->toString());
        $this->assertEquals(17, $sum->getReal());
        $this->assertEquals(7, $sum->getImaginaryMagnitude());
    }

    public function testMultiplyTrigonometry()
    {
        $sum = ComplexMath::multiply(
            new ComplexTrigonometry(2, -3),
            new ComplexTrigonometry(1, 5)
        );

        $this->assertEquals('18.38(Cos(0.39)+iSin(0.39))', $sum->toString());
    }


    public function testDivideAlgebraic()
    {
        $sum = ComplexMath::divide(
            new ComplexAlgebraic(3, 2),
            new ComplexAlgebraic(5, -3)
        );

        $this->assertEquals('0.26+0.56i', $sum->toString());
        $this->assertEquals(0.26, $sum->getReal());
        $this->assertEquals(0.56, $sum->getImaginaryMagnitude());
        $this->assertIsFloat($sum->getReal());
    }

    public function testDivideTrigonometry()
    {
        $sum = ComplexMath::divide(
            new ComplexTrigonometry(3, 2),
            new ComplexTrigonometry(5, -3)
        );

        $this->assertEquals('0.62(Cos(1.14)+iSin(1.14))', $sum->toString());
        $this->assertIsFloat($sum->getReal());
    }
}