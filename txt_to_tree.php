<?php

/* Впринципі думаю достатньо буде написати функціями. Хоча можна переписати і класом, але якщо в рамках більшого проекту, а так не бачу сенсу. */

$fp = fopen('data_file.txt', 'r');

$txt = fread($fp, filesize('data_file.txt')); // Читаємо файл у змінну

fclose($fp);

$temp_array = explode("\n", $txt); // Розбиваємо на строки

foreach ($temp_array as $temp_item) {
		$temp2_array = explode('|', $temp_item); // Розбиваємо на поля
		$category[$temp2_array[0]] = $temp2_array[2]; // Формуємо матрицю із категоріями
		$point[$temp2_array[0]] = $temp2_array[1]; // Формуємо допоміжну матрицю із зв'язкою ключів категорій-підкатегорій подібно як в MySQL
}

asort($point);

tree($category, $point); // Викликаємо головну функцію


function tree($category, $point, $id = 0, $level = 0) { // Рекурсивна функція, яка ходить по допоміжній матриці і виводить назви із матриці категорій
	foreach ($point as $key=>$value) {
		if ($value == $id) {
			echo space($level).$category[$key]."<br>";
			if (in_array($key, $point)) tree($category, $point, $key, $level+1);
		}
	}
}

function space($level) { // Допоміжна функція, яка формує отступи дефісами в залежності від рівня вкладеності
	$space = '';
	for($i = 0; $i<$level; $i++)
		$space.="-";
	return $space;
}