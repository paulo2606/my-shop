<?php

include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sqlInsert = "INSERT INTO clients(name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
$result = mysqli_query($conn, $sqlInsert);

if (!$result){
    die("Error to save client: " . mysqli_error($conn));
}

header("location: index.php");