<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home-produtos.css">
    <link rel="stylesheet" href="css/informacoes-produtos.css">
    <link rel="stylesheet" href="css/contato-e-localizacao.css">
    <link rel="stylesheet" href="css/quem-somos.css">
    <title>Marmitas Dona Rita</title>
</head>
<body>
    <div class="container">
        <div class="header">
            Marmitas Dona Rita
        </div>
        
        <main class="pages-included">
            <?php
            if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                include ($pagina);
            } else{
                include ("./pages/home-produtos.php");
            }
            ?>
        </main>

        <div class="footer">
        <nav class="nav-bar">
            <a href="index.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?pagina=pages/quem-somos.php">QUEM SOMOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?pagina=pages/contato-e-localizacao.php">CONTATO E LOCALIZAÇÃO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br>
        </nav>
            <span id="nome-aluno">Marco Aurelio Rocha Ferreira Junior</span> 
            RA: 21089024-5 - 
            Superior de Tecnologia em Sistemas para Internet - Unicesumar
        </div>
    </div>
    <script type="text/javascript" src="js/owl/jquery.min.js"></script>
    <script type="text/javascript" src="js/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/owl/owl-setup.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>