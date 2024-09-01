<?php
/*
 * Флаг 'r' -- открывает файл и устанавливает курсор в начало файла
 * Флаг 'r+' -- открывает и записывает файл
 * Флаг 'a' -- открывает файл и устанавливает курсор в конец файла
 * Флаг 'a+' -- открывает и записывает файл с конца (Добавление t помогает считывать символы \n)
 * Флаг 'w' -- записывает в файл если файла нет, то он его создает
 *
 * https://www.php.net/manual/ru/function.fopen.php
 * */
$file = fopen('./working_files/file.txt', 'a');

//fwrite($file, "Hello World!\n");
fclose($file);

$file = fopen('./working_files/file.txt', 'r+t');

fseek($file, 0); // Установка курсора

$i = 0;

while (!feof($file)) {
    echo fread($file, 1)."<br />";
}

fclose($file);

/*  */
file_put_contents('./working_files/file.txt', 'file_put_contents');

echo file_get_contents('./working_files/file.txt')."<br />";

/* Проверяет наличие файла */
echo file_exists('./working_files/file.txt')."<br />";

/* Размер файла */
echo filesize('./working_files/file.txt')."<br />";
