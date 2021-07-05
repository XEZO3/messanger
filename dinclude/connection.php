<?php
$host = "localhost";
$dbname ="messanger";
$username = "root";
$password = "";
$dsn = "mysql:host =$host;dbname=$dbname";
$con= new PDO ($dsn,$username,$password);
?>