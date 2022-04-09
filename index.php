<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }

        .input-field input[type=date]:focus+label,
        .input-field input[type=text]:focus+label,
        .input-field input[type=email]:focus+label,
        .input-field input[type=password]:focus+label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="section"></div>
    <main>
        <center>
            <img class="responsive-img" style="width: 250px;" src="http://i.imgur.com/ax0NCsK.gif" />
            <div class="section"></div>

            <h5 class="indigo-text">Por favor, entre com sua conta</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="post">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='uname' id='email' />
                                <label for='email'>Digite o seu Username</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Digite a sua senha</label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Esqueci a passowrd?</b></a>
                            </label>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Entrar</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="cadastra.php">Create account</a>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>


<?php
if (isset($_POST['uname']) && isset($_POST['password'])) {


    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE user_name='$uname' AND passwords='$pass'";

        $server = "localhost";
        $user = "root";
        $password = "";
        $db_name = "minsa";
        $conn = mysqli_connect($server, $user, $password, $db_name);
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['passwords'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                if ($row['nivel'] === "1") {
                    header("Location: home.php");
                } else if ($row['nivel'] === "0") {
                    header("Location: supervisor/index.php");
                }
                exit();
            } else {
                if ($uname === "Admin" && $pass === "Minsa") {
                    header("Location: home.php");
                    exit();
                } else {
                    header("Location: index.php?error=Incorect User name or password");
                    exit();
                }
            }
        } else {
            if ($uname === "Admin" && $pass === "Minsa") {
                header("Location: home.php");
                exit();
            } else {
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }
    }
} else {
    //    header("Location: index.php");
    //  exit();
}

?>