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

    foreach ($array as $key => $value) {
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

function calculator($current_operator, $operand_1, $operand_2)
{
    $operator_list = ['subtraction', 'addition', 'multiplication', 'division'];

    if (!$current_operator) {
        echo 'Укажите в адресной строке математический оператор которым хотите воспользоваться' . '<br/>';
        echo 'Доступные математические операторы: ' . printArrayValues($operator_list) . '<br/>';
        echo 'Пример: ' . $_SERVER['HTTP_HOST'] . '?operator=division&operand_1=6&operand_2=6';
        return die;
    }

    $is_operator_available = in_array($current_operator, $operator_list);

    if (!$is_operator_available) {
        echo 'Оператор' . ' ' . '<span style="color: deeppink">' . $current_operator . '</span>' . ' ' . 'отсутсвует!' . '<br/>';
        echo 'Возможно вы указали не существующий математический оператор или допустили ошибку в его названии.' . '<br/>';
        echo 'Попробуйте один из этих вариантов: ' . printArrayValues($operator_list) . ' !' . '<br/>';

        return die;
    }

    return match ($current_operator) {
        'subtraction' => subtraction($operand_1, $operand_2),
        'addition' => sum($operand_1, $operand_2),
        'multiplication' => multiplication($operand_1, $operand_2),
        'division' => division($operand_1, $operand_2),
    };
}

$current_operator = $_GET['operator'] ?? null;
$operand_1 = $_GET['operand_1'] ?? 0;
$operand_2 = $_GET['operand_2'] ?? 0;

echo 'Результат вычисления: ' . calculator($current_operator, $operand_1, $operand_2);
