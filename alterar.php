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
    <section class="log">
        <div class="login">
            <form class="formulariologin">
                
              <?php
              include("conexao.php");
                
              $user=$_POST["username"];
              $email=$_POST["email"];
              $senha=md5($_POST["senha"]);

              echo $user;
              $sql="UPDATE login SET username = '$user', email= '$email' WHERE senha = '$senha'";
                  
                if(mysqli_query($conexao, $sql))
                {
                  echo "<h1>Usuário Alterado com Sucesso!</h1>";
                  header ("Location: inicio.html");
                }
                else
                {
                  echo "Error: ".$sql."<br>".mysqli_error($conexao);
                  echo "<br><br><a href=inicio.html>Página Inicial</a>";
                }
              mysqli_close($conexao);
            ?>
              <br>
            </form>
        </div>
    </section>
</body>
</html>
