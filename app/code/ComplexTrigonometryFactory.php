<?php


namespace code;


class ComplexTrigonometryFactory implements iComplexFactory
{
    public function createComplex(float $a, float $b):iComplex{
        return new ComplexTrigonometry($a,$b);
    }
}