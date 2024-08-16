<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=jesinth;charset=utf8mb4;', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connection successful <br>';
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage() . '<br>');
    }
?>