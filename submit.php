<?php

include 'conn.php';

$id = $_GET['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sqlUpdate = "UPDATE clients SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address' WHERE `id` = $id";
$result = mysqli_query($conn, $sqlUpdate);

header ('Location: index.php');