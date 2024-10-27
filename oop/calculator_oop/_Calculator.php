<?php

declare(strict_types=1);

namespace oop\calculator_oop\_Calculator;

class _Calculator
{
  public const array OPERATOR_LIST = [
    'operator_sum' => 'sum',
    'operator_multiplication' => 'multiplication',
    'operator_subtraction' => 'subtraction',
    'operator_division' => 'division'
  ];
  private int $operand1;
  private int $operand2;
  private string $operator;
  private string $messageError = '';
  private float $amount = 0;

  public function __construct(string $operator, int $operand1, int $operand2)
  {
    $this->operator = $operator;
    $this->operand1 = $operand1;
    $this->operand2 = $operand2;
  }

  public function calculate(): void
  {
    $this->errorValidation();

    if (!empty($this->messageError)) {
      return;
    }

    switch ($this->operator) {
      case self::OPERATOR_LIST['operator_sum']:
        $this->amount = $this->sum();
        break;
      case self::OPERATOR_LIST['operator_multiplication']:
        $this->amount = $this->multiplication();
        break;
      case self::OPERATOR_LIST['operator_subtraction']:
        $this->amount = $this->subtraction();
        break;
      case self::OPERATOR_LIST['operator_division']:
        $this->amount = $this->division();
        break;
      default:
        $this->messageError = 'Нужный оператор не найден';
        break;
    }
  }

  private function errorValidation(): void
  {
    if ($this->operator === self::OPERATOR_LIST['operator_subtraction'] && $this->operand1 < $this->operand2) {
      $this->messageError .= 'Для операции вычитания operand_1 должен быть больше чем operand_2';
    } elseif ($this->operator === self::OPERATOR_LIST['operator_division'] && !$this->operand1 || !$this->operand2) {
      $this->messageError .= 'Деление на ноль запрещено';
    }
  }

  private function sum(): int
  {
    return $this->operand1 + $this->operand2;
  }

  private function multiplication(): int
  {
    return $this->operand1 * $this->operand2;
  }

  private function subtraction(): int
  {
    return $this->operand1 - $this->operand2;
  }

  private function division(): float
  {
    return $this->operand1 / $this->operand2;
  }

  public function getMessageError(): string
  {
    return $this->messageError;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }
}
