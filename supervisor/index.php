<?php include_once("Busca_Conglo.php");
include_once("salvar.php");
include_once("salvar_Sincro.php");
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

                <div class="col l4 m6 s12">

                    <h4>Adicionar Conglomerado</h4>
                    <form action="#" method="POST">
                        <div class="input-field col s6">
                            <input name="conglo" placeholder="Placeholder" id="conglo" type="text" class="validate">
                            <label for="conglo">Nome dos bairro separados por ,</label>
                        </div>
                        <div class="col s12">
                            <p></p>
                        </div>
                        <div class="col s6">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col l6 m6 s12 ">
                    <form action="#" method="post">
                        <h4>Sincronização</h4>
                        <div class="input-field col s6">
                            <select name="conglo2" id="conglo" class="browser-default">
                                <option disabled selected>Selecione o conglomerado</option>
                                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row1[0] ?>"><?php echo $row1[1] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            <input name="qtdEntre" type="number" placeholder="Quantas pessoas intrevistaste" max="12" min="0" id="qtdEntre" />
                        </div>
                        <div class="input-field col s6">
                            <input name="qtdPen" type="number" placeholder="Quantas pessoas pendestes" max="12" min="0" id="qtdPen" />
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" name="motivos" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Motivos dos pendentes</label>
                        </div>

                        <div class="input-field col s6">
                            <select name="semana" id="semana" class="browser-default">
                                <option disabled selected>Selecione a Semana</option>
                                <option value="1">1º</option>
                                <option value="2">2º</option>
                                <option value="3">3º</option>
                                <option value="4">4º</option>
                            </select>
                        </div>

                        <div class="input-field col s6">
                            <select name="mes" id="mes" class="browser-default">
                                <option value="Janeiro">Janeiro</option>
                                <option value="Fevereiro">Fevereio</option>
                                <option value="Março">Março</option>
                                <option value="Abril">Abril</option>
                                <option value="Maio">Maio</option>
                                <option value="Junho">Junho</option>
                                <option value="Julho">Julho</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Setembro">Setembro</option>
                                <option value="Outubro">Outubro</option>
                                <option value="Novembro">Novembro</option>
                                <option value="Dezembro">Dezembro</option>
                            </select>
                        </div>

                        <div class="input-field col s6">
                            <select name="prov" id="prov" class="browser-default">
                                <option value="Luanda">Luanda</option>
                                <option value="Benguela">Benguela</option>
                                <option value="Huambo">Huambo</option>
                                <option value="Uige">Uige</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Cunene">Cunene</option>
                                <option value="Moxico">Moxico</option>
                                <option value="Namibe">Namibe</option>
                                <option value="Malanje">Malanje</option>
                                <option value="Cabinda">Cabinda</option>
                                <option value="Lunda Sul">Lunda Sul</option>
                                <option value="Lunda Norte">Lunda Norte</option>
                                <option value="Cuando-Cubango">Cuando-Cubango</option>
                                <option value="Bengo">Bengo</option>
                                <option value="Huila">Huila</option>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            <input type="number" name="ano" min="2022" value="2022" placeholder="Digite o ano" />
                        </div>
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col l12">
                    <div class="row">
                        <div class="col l4"></div>
                        <div class="col l8">
                            <?php include_once("consultarSincro.php"); ?>
                        </div>
                    </div>
                </div>
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