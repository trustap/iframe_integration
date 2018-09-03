<?php
$host = "localhost";
$user = "root";
$pass = "toor";

$mysql_conn = new mysqli('localhost', 'user', 'pass', 'database');
if ($mysql_conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
} 

$trustapHost = "https://stagedemo.trustap.com";
?>
