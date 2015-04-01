<?php
require_once 'strings.php';
$s = new Strings;

$str = 'Welcome to the hello world program';
$find = 'hello world';
$contains = $s->checkContains($str, $find);

if($contains) {
	echo $find.' is found in the string: '.$str;
}
else {
	echo $find.' is not found in the string: '.$str;
}
?>