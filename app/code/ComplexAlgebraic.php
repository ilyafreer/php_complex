<?php


namespace code;


class ComplexAlgebraic extends Complex
{
    /**
     * Представления комплексного числа в алгебраической форме
     * @return string
     */
    public function toString(): string
    {
        $symbol = ($this->imaginaryMagnitude > 0) ? '+' : '';
        $imaginary = ($this->imaginaryMagnitude != 1.0) ? $this->imaginaryMagnitude : '';
        return $this->real . $symbol . $imaginary . 'i';
    }
}