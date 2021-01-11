<?php


namespace code;

/**
 * Представление комплексного числа
 * Class Complex
 * @package code
 */
class Complex
{
    /**
     * Действительная часть числа
     * @var float $real
     */
    private $real;

    /**
     * Мнимая часть числа
     * @var float $imaginaryMagnitude
     */
    private $imaginaryMagnitude;

    public function __construct(float $re, float $im)
    {
        $this->real = $re;
        $this->imaginaryMagnitude = $im;
    }

    /**
     * Возвращает действительную часть числа
     * @return float
     */
    public function getReal(): float
    {
        return $this->real;
    }

    /**
     * Возвращает мнимую часть числа
     * @return float
     */
    public function getImaginaryMagnitude(): float
    {
        return $this->imaginaryMagnitude;
    }

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