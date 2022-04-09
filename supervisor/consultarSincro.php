<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "minsa";



$connect = mysqli_connect($server, $user, $password, $db_name);
$inserir = "SELECT idsincro,provincia,semana,mes,ano,qtdEntre,Pendente,justificativa,conglomerado FROM `sincronizacao`,`conglo` WHERE conglo.idConglo=sincronizacao.idConglo";

$query = mysqli_query($connect, $inserir);

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
?>

<table class="striped responsive-table">
    <thead>
        <tr>
            <td>Codigo</td>
            <td>Provincia</td>
            <td>Semana</td>
            <td>Mês</td>
            <td>Ano</td>
            <td>Qtd Entrevistados</td>
            <td>Quatidade Pendente</td>
            <td>Justificativa</td>
            <td>conglomerado</td>
            <td>Editar</td>
        </tr>
    </thead>
    <tbody>
        <?php while ($row1 = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $row1[0] ?></td>
                <td><?php echo $row1[1] ?></td>
                <td><?php echo $row1[2] ?></td>
                <td><?php echo $row1[3] ?></td>
                <td><?php echo $row1[4] ?></td>
                <td><?php echo $row1[5] ?></td>
                <td><?php echo $row1[6] ?></td>
                <td><?php echo $row1[7] ?></td>
                <td><?php echo $row1[8] ?></td>
                <td><a class="waves-effect waves-light btn" href="?edita=<?php echo $row1[0] ?>"><i class="material-icons left">edit</i></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>