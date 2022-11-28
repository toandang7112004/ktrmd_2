<?php
include_once('db.php');
$ID = $_REQUEST['id'];
$sql = "DELETE FROM `room` WHERE `room_id` = $ID ";
$conn->exec($sql);
header("Location: indexroom.php");
?>