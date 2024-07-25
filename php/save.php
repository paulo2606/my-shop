<?php

include ('conexion.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sqlInsert = "INSERT INTO clients(name, email, phone, address) VALUES('$name', '$email', '$phone', '$address')";
$result = mysqli_query($conexion, $sqlInsert);


if (!$result) {
    die('erro ao inserir no bando de dados.');
}

header("location: list.php");
