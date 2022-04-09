<?php
if (isset($_POST['motivos'])) {

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "minsa";

    $ano = $_POST['ano'];
    $conglo2 = $_POST['conglo2'];
    $qtdEntre = $_POST['qtdEntre'];
    $motivos = $_POST['motivos'];
    $prov = $_POST['prov'];
    $mes = $_POST['mes'];
    $semana = $_POST['semana'];
    $qtdPre = $_POST['qtdPen'];


    $connect = mysqli_connect($server, $user, $password, $db_name);
    $inserir = "insert into sincronizacao (ano, idConglo, justificativa, mes, Pendente, provincia, qtdEntre, semana) 
    value('$ano','$conglo2','$motivos','$mes','$qtdPre','$prov','$qtdEntre','$semana')";

    $query = mysqli_query($connect, $inserir);

    if ($query) {
        echo "alert('Salva')";
        header('Location: index.php');
    } else {
        echo "alert('Salva')";
        header('Location: index.php');
    }
}

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
