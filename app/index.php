<?php
require __DIR__ . '/vendor/autoload.php';

use code\ComplexMath;

define('FORMATS',[
    'algebraic',
    'trigonometry'
]);

if(!$_GET['format'] || !in_array($_GET['format'],FORMATS)){
    die('Укажите в запросе format вывода ответа algebraic или trigonometry');
}

$className = 'code\Complex'.ucfirst($_GET['format']);

$complexA = new $className(5, 2.3);
$complexB = new $className(3, -3);

$results = [];

$results[$_GET['format']]['sum'] =
    '(' . $complexA->toString() . ') + (' . $complexB->toString() . ') = ' . ComplexMath::sum(
        $complexA,
        $complexB
    )->toString();

$results[$_GET['format']]['subtract'] =
    '(' . $complexA->toString() . ') - (' . $complexB->toString() . ') = ' . ComplexMath::subtract(
        $complexA,
        $complexB
    )->toString();

$results[$_GET['format']]['multiply'] =
    '(' . $complexA->toString() . ') * (' . $complexB->toString() . ') = ' . ComplexMath::multiply(
        $complexA,
        $complexB
    )->toString();

try {
    $results[$_GET['format']]['divide'] =
        '(' . $complexA->toString() . ') / (' . $complexB->toString() . ') = ' . ComplexMath::divide(
            $complexA,
            $complexB
        )->toString();
} catch (Exception $exception) {
    echo $exception->getMessage();
}


// Вариант с использованием абстрактной фабрики
$className .= 'Factory';
$complexFactory = new $className();

$complexA = $complexFactory->createComplex(5, 2.3);
$complexB = $complexFactory->createComplex(3, -3);

$results[$_GET['format'].' Factory']['sum'] =
    '(' . $complexA->toString() . ') + (' . $complexB->toString() . ') = ' . ComplexMath::sum(
        $complexA,
        $complexB
    )->toString();

$results[$_GET['format'].' Factory']['subtract'] =
    '(' . $complexA->toString() . ') - (' . $complexB->toString() . ') = ' . ComplexMath::subtract(
        $complexA,
        $complexB
    )->toString();

$results[$_GET['format'].' Factory']['multiply'] =
    '(' . $complexA->toString() . ') * (' . $complexB->toString() . ') = ' . ComplexMath::multiply(
        $complexA,
        $complexB
    )->toString();

try {
    $results[$_GET['format'].' Factory']['divide'] =
        '(' . $complexA->toString() . ') / (' . $complexB->toString() . ') = ' . ComplexMath::divide(
            $complexA,
            $complexB
        )->toString();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

var_dump($results);