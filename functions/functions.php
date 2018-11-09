<?php
$mysqli = FALSE;
function connectdb () {
	global $mysqli;
	$mysqli = new mysqli("localhost", "root", "", "bugrovabase");
	$mysqli ->query("SET NAMES 'utf-8' ");
}
function closedb () {
global $mysqli;
$mysqli->close ();	
}
?>