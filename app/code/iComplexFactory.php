<?php


namespace code;


interface iComplexFactory
{
    public function createComplex(float $a, float $b):iComplex;
}