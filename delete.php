<?php
include 'conn.php';

$id = $_GET['id'];
$sqlDelete = "DELETE FROM clients WHERE id = $id";
$result = mysqli_query($conn, $sqlDelete);

header('Location: index.php');