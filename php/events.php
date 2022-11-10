<?php
require_once("config.php");
$currentEmail = $_SESSION['email'];
$query = "SELECT * FROM `eventi` WHERE `attendees` LIKE '%$currentEmail%'";
$result = mysqli_query($connection, $query);
$events = $result->fetch_all(MYSQLI_ASSOC);
?>