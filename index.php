<?php
require_once 'user/get.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST"  action ="user/add.php" >
        <label for="">First Name</label>
        <input type="text" name="first_name"required>

        <label for="">Last Name</label>
        <input type="text"name="last_name"required>

        <label for="">Middle Name</label>
        <input type="text"name="middle_name"required>
        
        <label for="">Age</label>
        <input type="text"name="age" required>
        <button type="submit">ADD</button>
</form>
<form form method ="POST"  action ="user/update.php" >
    <label for="id">id</label>
    <input type="text" name="id" id="id">
    <label for="">First Name</label>
        <input type="text" name="first_name"required>

        <label for="">Last Name</label>
        <input type="text"name="last_name"required>

        <label for="">Middle Name</label>
        <input type="text"name="middle_name"required>
        
        <label for="">Age</label>
        <input type="text"name="age" required>
    <button type="submit">update</button>

</form>
<form method="POST" action="user/delete.php">
    <input type="text" name="id" >
    <button type="submit">Delete</button>
</form>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Age</th>
                <th>Created At</th>
            </tr>
            <?php if(!empty($students)): ?>
            <?php foreach($students as $student): ?>
            <tr>
                <td><?=htmlspecialchars($student['id'])?></td>
                <td><?= htmlspecialchars($student['first_name']) ?></td>
                <td><?= htmlspecialchars($student['last_name']) ?></td>
                <td><?= htmlspecialchars($student['middle_name']) ?></td>
                <td><?= htmlspecialchars($student['age']) ?></td>
                <td><?= htmlspecialchars($student['created_at']) ?></td>
                    
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">No students found.</td></tr>
            <?php endif; ?>
        </table>
    </div>
    
</body>
</html>
