<?php


namespace code;


class ComplexAlgebraic extends Complex
{
    /**
     * Возвращает стороковое представление
     * @return string
     */
    public function toString(): string
    {
        $symbol = ($this->imaginaryMagnitude > 0) ? '+' : '';
        $imaginary = ($this->imaginaryMagnitude != 1.0) ? $this->imaginaryMagnitude : '';
        return $this->real . $symbol . $imaginary . 'i';
    }
}