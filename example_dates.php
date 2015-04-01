<?php
require_once 'dates.php';
$d = new Dates;

$from = 'IST';
$to = 'CST';
$time = '17:52';

$t = $d->getZonesTime($from, $to, $time);
echo $t;
?>