<?php
require __DIR__ . '/vendor/autoload.php';

use code\ComplexMath;
use code\Complex;

$results = [];

$complexOne = new Complex(5, 2.3);
$complexTwo = new Complex(3, -3);

$results['sum'] = '(' . $complexOne->toString() . ')+(' . $complexTwo->toString() . ')=' . ComplexMath::sum(
        $complexOne,
        $complexTwo
    )->toString();

$results['subtract'] = '(' . $complexOne->toString() . ')-(' . $complexTwo->toString() . ')=' . ComplexMath::subtract(
        $complexOne,
        $complexTwo
    )->toString();

$results['multiply'] = '(' . $complexOne->toString() . ')*(' . $complexTwo->toString() . ')=' . ComplexMath::multiply(
        $complexOne,
        $complexTwo
    )->toString();

try {
    $results['divide'] = '(' . $complexOne->toString() . ')/(' . $complexTwo->toString() . ')=' . ComplexMath::divide(
            $complexOne,
            $complexTwo
        )->toString();
}catch (Exception $exception){
    echo $exception->getMessage();
}

var_dump($results);