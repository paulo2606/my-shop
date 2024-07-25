<?php

if(!isset($_SESSION)){
    session_start ();
}

$hostname = 'localhost:3306';
$bd = 'myshop';
$usuario = 'root';
$senha = 'root';

$conexion = mysqli_connect($hostname, $usuario, $senha, $bd);

if(!$conexion){
    die('Falha ao conectar: ' . mysqli_connect_error()) ;
}

