<?php


namespace code;


class ComplexTrigonometry extends Complex implements iComplex
{
    /**
     * Представления комплексного числа в тригонометрической форме
     * z = ρ(cosφ+isinφ)
     * ρ = sqrt(a^2+b^2)
     * φ = argtg(b/a)
     * @return string
     */
    public function toString():string
    {
        $p = round(sqrt(pow($this->getReal(),2)+pow($this->getImaginaryMagnitude(),2)),2);
        $f = round(atan2($this->getImaginaryMagnitude(),$this->getReal()),2);
        return $p."(Cos($f)+iSin($f))";
    }
}