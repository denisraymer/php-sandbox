<?php

// phpinfo();

/* https://www.php.net/manual/ru/language.operators.execution.php */
//echo "<pre>" . `ls -la` . "</pre>";

/*
 *  Проверка типа
 * https://www.php.net/manual/ru/language.operators.type.php
 */


/* Оператор global */
$my = 'test global';

function globalVariables(): void
{
    global $my;
    var_dump($my);
    var_dump($GLOBALS);
}

//echo '<pre/>';
//globalVariables();

/* Функции */

