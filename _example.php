<?php
//$page_title = 'Home';
require "header.php";

/* РАБОТА С ФАЙЛАМИ */
//include_once 'working_files/_example.php';
//include_once 'kats/SumArrays.php';
//include_once 'kats/YouonlyneedoneBeginner.php';
include_once "_include.php";
include_once 'calculator/index.php';

//include_once 'header.php'; // Подключает файл один раз, даже если файл подключен и на другой странице
//include_once 'form.php';
//include_once '_variables.php';
//include_once '_math.php';
//include_once '_stringi.php';
//include_once '_array.php';
//include_once '_data.php';
//include_once 'footer.php';
//require "footer.php";

//define("TEAM_715", 715);
//
//echo defined("TEAM_715");
//
//echo "<br/>";
//
//echo TEAM_715;
//
//echo 'ASD' . 'test';

// Исключающее или если оба условия отличаются возвращает true иначе false
//echo 5 > 6 ^ 6 > 5;

// Оператор эквивалентности
//echo 0 == ''; // true
//echo "Hello, World" == true; // true

//$value = 'Step 1';
//
//switch ($value) {
//    case 'Step 1':
//        echo 'Step 1';
//        break;
//    case 'Step 2':
//        echo 'Step 2';
//        break;
//    case 'Step 3':
//        echo 'Step 3';
//        break;
//    default:
//        echo 'Default step';
//}
//
//// ЦИКЛЫ
//for ($i = 0; $i <= 10; $i++) {
//    if ($i % 2 == 0) continue;
//    echo 'Echo'.$i;
//    break;
//}
//
//$x = 0;
//
//while ($x < 10) {
//    echo 'Step '.$x;
//
//    $x++;
//}
//
//$z = 0;
//
//do {
//    $z++;
//
//    echo 'Step '.$z;
//} while ($z < 10);
//
//function getMyFunc($num = 10)
//{
//    echo 'My function'.$num;
//}
//
//getMyFunc();
//getMyFunc(69);
//
//function mach($first, $second)
//{
//    return $first + $second;
//}
//
//$number = mach(69, 32);
//
//echo 'Mach function result'.$number;

// Асицоативный массив
//$array = array("key" => 2, "value" => 3, "key_2" => "Hello world");
//
//echo count($array);
//
//// Цикл foreach работает только, для массивов
//foreach ($array as $key => $value) {
//    echo $key." "."=>"." ".$value . "<br>";
//}
//
//// Область видимости переменных
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
