<?php


namespace code;


class ComplexAlgebraicFactory implements iComplexFactory
{
    public function createComplex(float $a, float $b):iComplex{
        return new ComplexAlgebraic($a,$b);
    }
}