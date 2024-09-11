<?php
declare(strict_types=1);
error_reporting(E_ALL);

//int_set('display_errors', 1);
//int_set('display_startup_errors', 1);

/* Калькулятор */
/*
Задачи
Калькулятор должен выполнять четыре математические операции сложение, вычитание, деление, умножение
При делении на ноль и при вычитании большего числа от меньшего должна выводиться ошибка
[+] Если введен или выбран не правельный оператор должена выводиться ошибка

Данные которые должен вводить пользователь, для работы калькулятора.
Выбор оператора - subtraction, addition, multiplication, division
Операнд - operand_1, operand_2
 */

function printArrayValues($array): string
{
    $result = '';

    foreach ($array as $value) {
        $result .= ', ' . $value;
    }

    return '<span style="color: deeppink">' . substr($result, 1) . '</span>';
}

function subtraction($operand1, $operand2)
{
    if ($operand1 < $operand2) {
        echo 'Для операции вычитания' . '<br/>';
        echo 'operand_1' . ' ' . 'должен быть больше чем' . ' ' . 'operand_2';
        return die;
    }

    return $operand1 - $operand2;
}

function sum($operand1, $operand2): int
{
    return $operand1 + $operand2;
}

function multiplication($operand1, $operand2): int
{
    return $operand1 * $operand2;
}

function division($operand1, $operand2)
{
    if (!$operand1 || !$operand2) {
        echo 'Деление на ноль запрещено';
        return die;
    }

    return $operand1 / $operand2;
}

function calculator($currentOperator, $operand1, $operand2)
{
    $operatorList = ['subtraction', 'addition', 'multiplication', 'division'];

    if (!$currentOperator) {
        echo 'Укажите в адресной строке математический оператор которым хотите воспользоваться' . '<br/>';
        echo 'Доступные математические операторы: ' . printArrayValues($operatorList) . '<br/>';
        echo 'Пример: ' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '?operator=division&operand_1=6&operand_2=6';
        return die;
    }

    $isOperatorAvailable = in_array($currentOperator, $operatorList);

    if (!$isOperatorAvailable) {
        echo 'Оператор' . ' ' . '<span style="color: deeppink">' . $currentOperator . '</span>' . ' ' . 'отсутсвует!' . '<br/>';
        echo 'Возможно вы указали не существующий математический оператор или допустили ошибку в его названии.' . '<br/>';
        echo 'Попробуйте один из этих вариантов: ' . printArrayValues($operatorList) . ' !' . '<br/>';

        return die;
    }

    return match ($currentOperator) {
        'subtraction' => subtraction($operand1, $operand2),
        'addition' => sum($operand1, $operand2),
        'multiplication' => multiplication($operand1, $operand2),
        'division' => division($operand1, $operand2),
        default => 0,
    };
}

$currentOperator = $_GET['operator'] ?? null;
$operand1 = $_GET['operand_1'] ?? 0;
$operand2 = $_GET['operand_2'] ?? 0;

echo 'Результат вычисления: ' . calculator($currentOperator, $operand1, $operand2);
