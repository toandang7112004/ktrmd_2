<?php
include_once('db.php');
$ID = $_REQUEST['id'];
$sql = "DELETE FROM `patient` WHERE `id` = $ID ";
$conn->exec($sql);
header("location:index.php");


?>