<?php
$exampleOutput = 'Example Output';

/* Длина строки (Пробелы тоже учитываются!) */
//echo strlen($exampleOutput);

/* Поиск по строке */
//echo strpos($exampleOutput, 'Example').'<br/>';

/* Обрезание строки */
echo substr($exampleOutput, strpos($exampleOutput, 'Output'), 6).'<br/>';

/* Замена строки */
echo str_replace('Output', '', $exampleOutput).'<br/>';
echo str_replace(array('O', 'u', 't', 'p', 'u', 't'), array('1', '2', '3', '4', '5', '6'), $exampleOutput).'<br/>';

/* Превращение HTML тэгов юникод всимволы */
$exampleOutputHTMLTags = '<b>Example Output<b/>';
echo htmlspecialchars($exampleOutputHTMLTags, ENT_QUOTES, 'UTF-8').'<br/>';
echo htmlspecialchars_decode($exampleOutputHTMLTags, ENT_QUOTES).'<br/>';

echo strtolower($exampleOutput).'<br/>';
echo strtoupper($exampleOutput).'<br/>';

/* Шифрование md5 */
echo $exampleOutput.": ".md5($exampleOutput).'<br/>';

/* Удаление лишних пробелов */
echo trim("       ---         "."<b>My    otput      </b>    ".$exampleOutput."    ---      ").'<br/>';
