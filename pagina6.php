<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <title>Siqueira Websites</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Inserção do Bootstrap versão 4 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Fim insercão Bootstrap Versão 4-->
  <!-- Javascript do site-->
  <script src="js/site.js"></script>
  <!-- css do site-->
  <link rel="shortcut icon" href="imagem/Logo_Clara.svg" target="image/x-icon">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/navbar-exercicio.css">
  <!-- adição do Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/exercicio6.css">

</head>
<body>
    <!-- Adição do menu superior -->
        <?php include("php/menu.php"); ?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-md-3">
          <?php include_once("php/menu-exercicio-php.php"); ?>
        </div>
        <div class="col-md-9">
          <h1>Exercício 06 </h1>
          <form action="pagina6.php" method="POST">
            <input type="number" class="form-control" name="numero" placeholder="Quantos círculos escrever">
            <button type="submit" name="submit" class="btn btn-outline-dark">Desenhar</button>
          </form>
          <div class="result">
            <?php
              if(isset($_POST['numero'])){
                $vezes = $_POST['numero'];
                for($i = 0; $i < $vezes; $i++){
                  echo '<div class="circulo"></div>';
                }
              }
            ?>
          </div>
        </div>
        
      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("php/footer.php"); ?>
</body>
</html>