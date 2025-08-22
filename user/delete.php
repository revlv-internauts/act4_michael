<?php
require_once __DIR__ . '/../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = trim($_POST["id"]);


    $stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    
    header("Location: ../index.php");
    exit();
}

