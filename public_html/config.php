<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'mysql';
$databaseName = 'arkademy';
$databaseUsername = 'root';
$databasePassword = 'testing';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>