<?php

$hostname = "localhost";
$bancodedados = "kuramaki";
$usuario ="root";
$senha ="";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_error . ")" . $mysqli->connect_errno;
}
else {
    echo "Conected in Database";
}