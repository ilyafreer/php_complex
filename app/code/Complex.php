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
    protected $real;

    /**
     * Мнимая часть числа
     * @var float $imaginaryMagnitude
     */
    protected $imaginaryMagnitude;

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
     * Возвращает представление числа в строковом формате
     * @return string
     */
    abstract public function toString():string;
}