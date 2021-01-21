<?php


namespace code;

/**
 * Представление комплексного числа
 * Class Complex
 * @package code
 */
abstract class Complex
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
}