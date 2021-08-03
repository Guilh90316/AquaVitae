<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilobase.css" />
    <title>Aqua Vitae | Vinhos</title>
</head>

<body class="telalogin">
    <header>
        <a href="inicio.html"><img class="logo" src="img/logo/AquaVitaeBranco.png" /></a>
        <!-- Nav Bar -->
        <nav>
            <ul class="nav_links">
                <li><a href="inicio.html">Vinhos</a></li>
                <li><a href="premium.html">Linha Premium</a></li>
                <li><a href="bebidas.html">Outras Bebidas</a></li>
                <li><a href="quemsomos.html">Quem Somos</a></li>
            </ul>
        </nav>
    </header>

         <?php
          session_start();
          if(!isset($_SESSION["user"])){
            echo "Erro";
            exit();
          }
          echo "<p style='color: #f5f5f5; font-size: 30px; text-align: center;'>Bem-Vindo ao seu carrinho, ".$_SESSION["user"] . ".</p>";
          echo "<br><br>";
        ?>
        <div style = "padding: 10px;">
        <h1 class="textocarrinho" style="color: #f5f5f5; font-size: 30px; text-align: center;">Carrinho</h1>
        <hr>

        <div class="row">
            <div class="column">
                <h3 style="text-align: center; font-size: 20px; color: #f5f5f5">Item 1</h3>
                <h4 style="text-align: center; font-size: 15px; color: #f5f5f5">Descrição: 2 Unidades de "Cabernet Sauvignon"</h4><br>
                <img src="img/CabernetSauvignon.jpg" style="zoom: 0.3; display: block; margin-left: auto; margin-right: auto;"><br>
            </div>
            <div class="column">
                <h3 style="text-align: center; font-size: 20px; color: #f5f5f5">Item 2</h3>
                <h4 style="text-align: center; font-size: 15px; color: #f5f5f5">Descrição: 3 Unidades de "Chardonnay"</h4><br>
                <img src="img/Chardonnay.jpg" style="zoom: 0.23; display: block; margin-left: auto; margin-right: auto;"><br>
            </div>
            <div class="column">
                <h3 style="text-align: center; font-size: 20px; color: #f5f5f5">Item 3</h3>
                <h4 style="text-align: center; font-size: 15px; color: #f5f5f5">Descrição: 1 Unidade de "Brandy Whiskey"</h4><br>
                <img src="img/BrandyWiskey.jpg" style="zoom: 0.19; display: block; margin-left: auto; margin-right: auto;"><br>
            </div>
        </div>
        
        <p><a href="alterar.html">Alterar dados cadastrais</a></p>
        <p><a href="logout.php">Sair do carrinho</a></p>
        </div>
    </body>
</html>