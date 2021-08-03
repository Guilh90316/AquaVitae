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
    <section class="log">
        <div class="login">
            <form class="formulariologin">
        <?php
           include("conexao.php");
    
           //verificar formulário para autenticação
           $senha=md5($_POST["senha"]);
           $email = $_POST["email"];
           
           $sql="SELECT username FROM login WHERE email='$email' AND senha='$senha'";
           $resultado=mysqli_query($conexao, $sql);
           $linhas=mysqli_affected_rows($conexao);
           
           if($linhas>0){
                session_start();
                $_SESSION["user"] = $email;
                header("location: privado.php");
           }
            else{
                echo "<h1>Dados incorretos!</h1>";
            }
        ?>
        </form>
        </div>
    </section>
</body>

</html>