<?php

namespace code;

/**
 * Вычислительные опетации над комплексными числами
 * Class ComplexMath
 * @package code
 */
class ComplexMath
{

    /**
     * Сложение двух комплексных чисел
     * @param Complex $a Первое число
     * @param Complex $b Второе число
     * @return Complex
     */
    public static function sum(Complex $a, Complex $b): Complex
    {
        return new Complex(
            $a->getReal() + $b->getReal(),
            $a->getImaginaryMagnitude() + $b->getImaginaryMagnitude()
        );
    }

    /**
     * Вычитание двух комплексных чисел
     * @param Complex $a Первое число
     * @param Complex $b Второе число
     * @return Complex
     */
    public static function subtract(Complex $a, Complex $b): Complex
    {
        return new Complex(
            $a->getReal() - $b->getReal(),
            $a->getImaginaryMagnitude() - $b->getImaginaryMagnitude()
        );
    }

    /**
     * Произведение двух комплексных чисел с округлением до сотых
     * @param Complex $a Первое число
     * @param Complex $b Второе число
     * @return Complex
     */
    public static function multiply(Complex $a, Complex $b): Complex
    {
        $newReal = $a->getReal() * $b->getReal() - $a->getImaginaryMagnitude() * $b->getImaginaryMagnitude();
        $newImaginary = $a->getReal() * $b->getImaginaryMagnitude() + $b->getReal() * $a->getImaginaryMagnitude();

        return new Complex(round($newReal, 2), round($newImaginary, 2));
    }

    /**
     * Частное деления двух комплексных чисел с округлением до сотых
     * @param Complex $a Первое число
     * @param Complex $b Второе число
     * @return Complex
     */
    public static function divide(Complex $a, Complex $b): Complex
    {
        $numeratorReal = $a->getReal() * $b->getReal() + $a->getImaginaryMagnitude() * $b->getImaginaryMagnitude();
        $numeratorImaginary = $b->getReal() * $a->getImaginaryMagnitude() - $a->getReal() * $b->getImaginaryMagnitude();
        $denominator = pow($b->getReal(), 2) + pow($b->getImaginaryMagnitude(), 2);
        if(empty($denominator)){
            throw new \Exception('Операция divede в знаменателе получила 0. Деление невозможно');
        }
        return new Complex(round($numeratorReal / $denominator, 2), round($numeratorImaginary / $denominator,2));
    }
}