<?php
if (isset($_POST['user'])) {

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "minsa";

    $users = $_POST['user'];
    $senha = $_POST['password'];
    $nivel = $_POST['nivel'];
    $name = $_POST['name'];

    $connect = mysqli_connect($server, $user, $password, $db_name);
    $inserir = "insert into user (user_name,passwords,nivel,nomeCompleto) value('$users','$senha','$nivel','$name')";
    $query = mysqli_query($connect, $inserir);
    if ($query) {
        echo "<script>alert('Salva')</script>";
        header('Location: ../index.php');
    } else {
        echo "<script>alert('Erro')</script>";
        header('Location: ../index.php');
    }
}

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
