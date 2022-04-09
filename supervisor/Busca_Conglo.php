<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "minsa";



$connect = mysqli_connect($server, $user, $password, $db_name);
$inserir = "select * from conglo";

$query = mysqli_query($connect, $inserir);

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
