<?php
declare(strict_types=1);

//int_set('display_errors', 1);
//int_set('display_startup_errors', 1);

/* Калькулятор */
function calculator(string $operator, int $operand1, int $operand2): array
{
  $amount = 0;
  $errorMessage = '';

  switch ($operator) {
    case 'sum':
      $amount = $operand1 + $operand2;
      break;
    case 'multiplication':
      $amount = $operand1 * $operand2;
      break;
    case 'subtraction':
      if ($operand1 < $operand2) {
        $errorMessage .= 'Для операции вычитания operand_1 должен быть больше чем operand_2';
        break;
      }

      $amount = $operand1 - $operand2;
      break;
    case 'division':
      if (!$operand1 || !$operand2) {
        $errorMessage = 'Деление на ноль запрещено';
        break;
      }

      $amount = $operand1 / $operand2;
      break;
    default:
      $errorMessage = 'Нужный оператор не найден';
      break;
  }

  return [$amount, $errorMessage];
}
