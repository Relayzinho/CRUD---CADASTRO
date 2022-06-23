<?php
  include "../validar.php";
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags (DEIXA O SITE RESPONSIVO)-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>CADASTRO</title>
  </head>
  <body>
    <!--CRIANDO DIVISOES-->
    <!-- enctype="multipart/form-data" (COMANDO PARA COLOCAR FOTO) -->

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro</h1>
          <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" name="nome" required>                
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco">                
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone">                
            </div>
             <div class="form-group">
                <label for="telefone">Email</label>
                <input type="email" class="form-control" name="email">                
            </div>
            <div class="form-group">
                <label for="telefone">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento">
            </div>   
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto" accept="image/*">
            </div>              
            <div class="form-group">                
                <input type="submit" class="btn btn-success">                
            </div>
          </form>
          <a href="index.php" class="btn btn-info">Voltar para o início</a>
        </div>        
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>