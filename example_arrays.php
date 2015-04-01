<?php
require_once 'arrays.php';
$a = new Arrays;

$arr = array('welcome', 'to', 'the', 'land', 'of', 'php', 'code');
$find = 'php';

$contains = $a->inArray($arr, $find);

if($contains) {
	echo 'Element '.$find.' is found in array of strings:';
}
else {
	echo 'Element '.$find.' does not exist in array of strings:';
}
echo '<br><br>';
$a->printArray($arr);
?>