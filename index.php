<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link type="text/css" rel="stylesheet" href="assets/css/sytle.css">
</head>
<body>
    <?php include "base/navbar.php" ?>
        <main class="principal">
              <?php
                      session_start();
                      if(isset($_SESSION['usuario']) && isset($_SESSION["passwd"])){
                              $pagina = array(
                                1 =>"home.php",
                                2 =>"cadastro.php",
                                3 =>"listar.php",
                                4 =>"alterar.php",
                                5 =>"excluir.php",
                                6 =>"alterar_dados.php",
                            );

                            $link =$_GET['link'];
                            if(!empty($link)){
                                if(file_exists($pagina[$link])){
                                    include $pagina[$link];
                                }else{
                                  include "home.php";
                                }
                            }else{
                              include "home.php";
                            }
                      }else{
                        include "login.php";
                      }
              ?>
        </main>
    <?php include "base/footer.php" ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="assets/js/passwd.js"></script>
</body>
</html>