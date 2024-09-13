<?php

declare(strict_types=1);

require __DIR__ . '/_calculator.php';

function printArrayValues($array): string
{
  $result = '';

  foreach ($array as $value) {
    $result .= ', ' . $value;
  }

  return '<span style="color: deeppink">' . substr($result, 1) . '</span>';
}

function initCalculatorPage(): string
{
  $operatorList = ['subtraction', 'sum', 'multiplication', 'division'];
  $currentOperator = $_GET['operator'] ?? null;
  $operand1 = $_GET['operand_1'] ?? 0;
  $operand2 = $_GET['operand_2'] ?? 0;

  if (!isset($currentOperator)) {
    return 'Укажите в адресной строке математический оператор которым хотите воспользоваться' . '<br/>'
      . 'Доступные математические операторы: ' . printArrayValues($operatorList) . '<br/>'
      . 'Пример: ' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
      . '?operator=division&operand_1=6&operand_2=6';
  }

  $isOperatorAvailable = in_array($currentOperator, $operatorList);

  if (!$isOperatorAvailable) {
    return 'Оператор' . ' ' . '<span style="color: deeppink">' . $currentOperator . '</span>' . ' ' . 'отсутсвует!' . '<br/>'
      . 'Возможно вы указали не существующий математический оператор или допустили ошибку в его названии.' . '<br/>'
      . 'Попробуйте один из этих вариантов: ' . printArrayValues($operatorList) . ' !' . '<br/>';
  }

  [$calculationAmount, $errorMessage] = calculator($currentOperator, +$operand1, +$operand2);

  if (!empty($errorMessage)) {
    return $errorMessage;
  }

  return 'Результат вычисления: ' . $calculationAmount;
}

echo initCalculatorPage();
