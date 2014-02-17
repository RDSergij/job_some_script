<?php
$table = array ( /* Массив таблицы */
 array (
 'Name' => 'Trixie',
 'Color' => 'Green',
 'Element' => 'Earth',
 'Likes' => 'Flowers'),
 array (
 'Name' => 'Tinkerbell',
 'Element' => 'Air',
 'Likes' => 'Singning',
 'Color' => 'Blue'),
 array (
 'Name' => 'Blum',
 'Element' => 'Water',
 'Likes' => 'Dancing',
 'Color' => 'Pink'),
);

/* Шапка */
border();
echo  "<div style='float: left; width: 6em;'>&nbsp;|<span style='margin-left: 12px;'>Name</span></div>
			<div style='float: left; width: 5.8em;'>|<span style='margin-left: 12px;'>Color</span></div>
			<div style='float: left; width: 5.8em;'>|<span style='margin-left: 12px;'>Element</span></div>
			<div style='float: left; width: 5.8em;'>|<span style='margin-left: 12px;'>Likes</span></div>|<br>";
border();
foreach ($table as $item) { // Выводим данные
	echo  "<div style='float: left; width: 6em;'>&nbsp;|<span style='margin-left: 12px;'>".$item["Name"]."</span></div>
			<div style='float: left; width: 5.8em;'>|<span style='margin-left: 12px; color: ".$item["Color"].";'>".$item["Color"]."</span></div>
			<div style='float: left; width: 5.8em;'>|<span style='margin-left: 12px;'>".$item["Element"]."</span></div>
			<div style='float: left; width: 5.8em;'>|<span style='margin-left: 12px;'>".$item["Likes"]."</span></div>|<br>";
	border();	
}


function border() { //Выводим промежуточную границу
	echo "+--------------+--------------+--------------+--------------+<br>";
}
