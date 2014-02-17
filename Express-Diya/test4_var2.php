<?php
/* Вариант text (без html) */
header("Content-type: text");
$table = array (
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

border();
echo "|".row("Name")."|".row("Color")."|".row("Element")."|".row("Likes")."|\n";
border();
foreach ($table as $item) {
	echo  "|".row($item["Name"])."|".row($item["Color"])."|".row($item["Element"])."|".row($item["Likes"])."|\n";
	border();
}


function border() {
	echo "+--------------+--------------+--------------+--------------+\n";
}

function row($str) {
	$left = $right = floor (( 14 - mb_strlen($str, "UTF-8") ) / 2 );	
	$one_is = ( 14 - strlen($str) ) % 2;
	if ($one_is) $left++;
	return str_repeat( " " , $left ).$str.str_repeat( " " , $right );
}
