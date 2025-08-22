<?php
require_once __DIR__ . '/../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $middle_name = trim($_POST["middle_name"]);
    $age = trim($_POST["age"]);
    $created_at = date("Y-m-d"); 



        $stmt = $pdo->prepare(
            "INSERT INTO students (first_name, last_name, middle_name, age, created_at)
             VALUES (:first_name, :last_name, :middle_name, :age, :created_at)"
        );

        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":middle_name", $middle_name);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":created_at", $created_at);

        $stmt->execute(); 

        
        header("Location: ../index.php");
        exit();

    }

