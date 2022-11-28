<?php
$username = 'root';
$password = '';
$database = 'kiemtra';
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch ( Exception $e) {
    echo $e->getMessage();
}
?>