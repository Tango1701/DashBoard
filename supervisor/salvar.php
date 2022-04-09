<?php
if (isset($_POST['conglo'])) {

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "minsa";

    $conglo = $_POST['conglo'];

    $connect = mysqli_connect($server, $user, $password, $db_name);
    $inserir = "insert into conglo (conglomerado) value('$conglo')";

    $query = mysqli_query($connect, $inserir);

    if ($query) {
        echo "alert('Salva')";
        header('Location: index.php');
    } else {
        echo "alert('Erro')";
        header('Location: index.php');
    }
}

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
