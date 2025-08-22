<?php
session_start();

$dsn = "pgsql:host=127.0.0.1;port=5432;dbname=postgres"; 
$pdo = new PDO($dsn, "postgres" ,"biboy123");
