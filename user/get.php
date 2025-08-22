<?php
require_once __DIR__ . '/../db.php';


$students = []; 

try {
    $stmt = $pdo->prepare("SELECT * FROM students");
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();

}

?>
