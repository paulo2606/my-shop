<?php

$host = 'localhost';
$user = 'root';
$pwd = 'root';
$db = 'my_shop';
$port = 3306;

$conn = mysqli_connect($host, $user, $pwd, $db, $port);

if (mysqli_connect_errno()) {
    die('erro: '. mysqli_connect_error());
}   