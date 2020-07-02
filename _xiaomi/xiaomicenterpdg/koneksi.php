<?php
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'xiaomicenterpdg';

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>