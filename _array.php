<?php
$exampleArray = array('ECHO', 213, 715, 'Example string');
$exampleAssociativeArray = array('ECHO' => 'project', 213 => 1998, 715 => 'TEAM', 'Example string' => '1998.09.07', 1 => '5');

/* Длина массива */
echo count($exampleArray)."<br />";

/* Сортировка массива */
sort($exampleArray);
print_r($exampleArray);

echo "<br /><br />";

/* Сортировка в обратном порядке */
rsort($exampleArray);
print_r($exampleArray);

echo "<br /><br />";

/* Сортировка с сохранением индекса */
asort($exampleArray);
print_r($exampleArray);

echo "<br /><br />";

arsort($exampleArray);
print_r($exampleArray);

echo "<br /><br />";

/* Сортировка по ключу */
ksort($exampleAssociativeArray);
print_r($exampleAssociativeArray);

echo "<br /><br />";

/* Смешивание элементов в массиве */
shuffle($exampleAssociativeArray);
print_r($exampleAssociativeArray);

// echo str_shuffle('Example string');

echo "<br /><br />";

/* Проверка наличия элемента в массиве */
var_dump(in_array('TEAM', $exampleAssociativeArray));

echo "<br /><br />";

/* Соединение массивов */
$exampleMergeArray1 = array('ECHO', 213, 715, 'Example string');
$exampleMergeArray2 = array('ECHO', 213, 715, 'Example string');

$mergeArray = array_merge($exampleMergeArray1, $exampleMergeArray2);
print_r($mergeArray);

echo "<br /><br />";

/* Обрезание массива, возвращает то что обрезал */
var_dump($mergeArray);

echo "<br /><br />";

var_dump(array_slice($mergeArray, 0, 2));

echo "<br /><br />";

print_r(array_slice($mergeArray, 0, -2));
