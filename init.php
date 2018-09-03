<?php
$mysql_conn = new mysqli('localhost', 'user', 'pass', 'database');
if ($mysql_conn->connect_error) {
        die("Connection failed: " . $mysql_conn->connect_error);
} 

$trustapHost = "https://stageapp.trustap.com";
?>
