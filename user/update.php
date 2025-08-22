<?php
require_once __DIR__ . '/../db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = trim($_POST["id"]);
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $middle_name = trim($_POST["middle_name"]);
    $age = trim($_POST["age"]);
    $created_at = date("Y-m-d"); 



        $stmt = $pdo->prepare(
            "update students set 
            first_name = :first_name,
            last_name = :last_name,
            middle_name = :middle_name,
            age = :age,
            created_at = :created_at 
            where id= :id"
        );

        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":middle_name", $middle_name);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":created_at", $created_at);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute(); 

        
        header("Location: ../index.php");
        exit();

    }

