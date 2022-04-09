<?php include_once("Alterar.php");

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINSA</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">MINSA</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Adicionar conglomerado</a></li>
                <li><a href="badges.html">Consultar Conglomerado</a></li>
                <li><a href="collapsible.html">Sair</a></li>
            </ul>
        </div>
    </nav>
    <p></p>
    <div class="row">
        <div class="col l12">

        </div>
        <div class="col l12">
            <div class="row">
                <div class="col l3"></div>
                <div class="col l6">
                    <?php include_once("supervisor/consultarSincro.php"); ?>
                </div>
                <div class="col l3"></div>
            </div>
        </div>
    </div>



    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red" href="#">
            <i class="large material-icons">mode_edit</i>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>
</body>

</html>