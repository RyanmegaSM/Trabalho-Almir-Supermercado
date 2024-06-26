<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Super Mercado</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body class="background">

    </div>

    <div class="mains had-container">

        <div class="parallax-container logueo">
            <div class="parallax"><img src="https://alistapart.com/d/438/fig-6--background-blend-mode.jpg"></div>
            <div class="row"><br>
                <div class="col m8 s8 offset-m2 offset-s2 center">
                    <h4 class="truncate bg-card-user">
                        <img src="./image/logo_mercado.png" alt="" class="circle responsive-img">
                        <div class="row login">
                            <h4>Iniciar Seção</h4>
                            <form method="post" action="login.php" class="col s12">
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">account_box</i>
                                        <input id="icon_prefix" type="text" name="usuario" class="validate">
                                        <label for="icon_prefix">Nome</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">enhanced_encryption</i>
                                        <input id="password" type="password" name="senha" class="validate">
                                        <label for="password">Senha</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn waves-effect waves-light" type="submit"
                                        name="action">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="page-footer green dark-1">
        <div class="footer-copyright green">
            <div class="container">
                ©Copyright SuperMercado - 2024
                <a class="grey-text text-lighten-4 right" href="https://www.fema.edu.br">fema.edu.br</a>
            </div>
        </div>
    </footer>



    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
</body>


</html>

<script>
    $(document).ready(function () {
        $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
            onOpen: function (el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
            onClose: function (el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
        }
        );
        $('.parallax').parallax();
    });
</script>