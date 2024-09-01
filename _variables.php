<?php
function isVariableExists($var)
{
    if (isset($var)) {
        echo 'Переменная существует';
    } else {
        echo 'Переменная не существует';
    }

}

$test = 123;

//isVariableExists($test);
//
//unset($test);
//
//isVariableExists($test);
//
//echo '------------------------------------';

echo 'Is numeric'." ".is_numeric($test).'<br />'; // Является ли переменная номером
echo 'Is numeric'." ".is_integer($test).'<br />'; // Является ли переменная числом
echo 'Is numeric'." ".is_double($test).'<br />'; // Является ли переменная числом с плавающей точкой
echo 'Is numeric'." ".is_bool($test).'<br />'; // Является ли переменная булевым значением
echo 'Is numeric'." ".is_scalar($test).'<br />'; // Проверяет, представляет ли собой переменная скаляр.
// Скалярные переменные — это переменные, содержащие int, float, string и bool. Типы array, object, resource и null — не скалярные.

echo 'Is numeric'." ".is_null($test).'<br />'; // Является ли переменная null
echo 'Is numeric'." ".is_array($test).'<br />'; // Является ли переменная массивом

echo 'Is numeric'." ".gettype($test).'<br />'; // Получаем тип переменной

// Область видимости переменных
//$x = 10;
//
//function myFunction()
//{
//    global $x;
//    // $x = $GLOBALS['x'];
//
//    echo ++$x;
//}
//
//echo $x;
//
//myFunction();
//
//function myStaticFunction()
//{
//    static $x;
//    $x++;
//    echo $x;
//}
//
//echo '<br/>';
//
//for($i = 0; $i < 10; $i++) {
//    myStaticFunction();
//}
