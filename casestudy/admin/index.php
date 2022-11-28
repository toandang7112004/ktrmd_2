<?php
include_once 'db.php';
global $conn;
$sql = "SELECT * FROM customers WHERE role = 'Admin'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
?>