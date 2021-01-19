<?php
require __DIR__ . '/vendor/autoload.php';

use code\ComplexMath;
use code\ComplexAlgebraic;
use code\ComplexTrigonometry;

$results = [];

$complexAlgebraicOne = new ComplexAlgebraic(5, 2.3);
$complexAlgebraicTwo = new ComplexAlgebraic(3, -3);

$results['algebraic']['sum'] =
    '(' . $complexAlgebraicOne->toString() . ') + (' . $complexAlgebraicTwo->toString() . ') = ' . ComplexMath::sum(
        $complexAlgebraicOne,
        $complexAlgebraicTwo
    )->toString();

$results['algebraic']['subtract'] =
    '(' . $complexAlgebraicOne->toString() . ') - (' . $complexAlgebraicTwo->toString() . ') = ' . ComplexMath::subtract(
        $complexAlgebraicOne,
        $complexAlgebraicTwo
    )->toString();

$results['algebraic']['multiply'] =
    '(' . $complexAlgebraicOne->toString() . ') * (' . $complexAlgebraicTwo->toString() . ') = ' . ComplexMath::multiply(
        $complexAlgebraicOne,
        $complexAlgebraicTwo
    )->toString();

try {
    $results['algebraic']['divide'] =
        '(' . $complexAlgebraicOne->toString() . ') / (' . $complexAlgebraicTwo->toString() . ') = ' . ComplexMath::divide(
            $complexAlgebraicOne,
            $complexAlgebraicTwo
        )->toString();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

$complexTrigonometryOne = new ComplexTrigonometry(1, -1);
$complexTrigonometryTwo = new ComplexTrigonometry(2, 3.5);

$results['trigonometry']['sum'] =
    $complexTrigonometryOne->toString() . ' + ' . $complexTrigonometryTwo->toString() . ' = ' . ComplexMath::sum(
        $complexTrigonometryOne,
        $complexTrigonometryTwo
    )->toString();

$results['trigonometry']['subtract'] =
    $complexTrigonometryOne->toString() . ' - ' . $complexTrigonometryTwo->toString() . ' = ' . ComplexMath::subtract(
        $complexTrigonometryOne,
        $complexTrigonometryTwo
    )->toString();

$results['trigonometry']['multiply'] =
    $complexTrigonometryOne->toString() . ' * ' . $complexTrigonometryTwo->toString() . ' = ' . ComplexMath::multiply(
        $complexTrigonometryOne,
        $complexTrigonometryTwo
    )->toString();

try {
    $results['trigonometry']['divide'] =
        $complexTrigonometryOne->toString() . ' / ' . $complexTrigonometryTwo->toString() . ' = ' . ComplexMath::divide(
            $complexTrigonometryOne,
            $complexTrigonometryTwo
        )->toString();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

var_dump($results);