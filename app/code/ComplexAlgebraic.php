<?php


namespace code;


class ComplexAlgebraic extends Complex implements iComplex
{
    /**
     * Представления комплексного числа в алгебраической форме
     * @return string
     */
    public function toString(): string
    {
        $symbol = ($this->getImaginaryMagnitude() > 0) ? '+' : '';
        $imaginary = ($this->getImaginaryMagnitude() != 1.0) ? $this->getImaginaryMagnitude() : '';
        return $this->getReal() . $symbol . $imaginary . 'i';
    }
}