<?php 
if(empty($_COOKIE['temptime'])){$time=strval(time());
session_id($time.'x'.crc32($time));}
session_start();

include('g3.php');
?>
