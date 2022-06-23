<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags (DEIXA O SITE RESPONSIVO)-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Alteração de Cadastro</title>
  </head>
  <body>

  <!--Script para fazer a requisao no bd e pesquisar novamente os dados do id-->
      <?php

        include "conexao.php";
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

        $dados = mysqli_query($connect, $sql);

        //APRESENTANDO OS DADOS DENTRO DO FORMULARIO//
        $linha = mysqli_fetch_assoc($dados);


      ?>

    <!--CRIANDO DIVISOES-->

    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Cadastro</h1>
            <form action="edit_script.php" method="POST">
            <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="name" required value="<?php echo $linha['nome']; ?>">
            </div>
            <div class="form-group">
            <label for="endereco">Endereco</label>
            <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
            </div>
            <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
            </div>  
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"value="<?php echo $linha['email']; ?>">
            </div> 
            <div class="form-group">
            <label for="telefone">Data de Nascimento</label>
            <input type="date" class="form-control" name="data_nascimento"value="<?php echo $linha['data_nascimento']; ?>">
            </div> 
            <div class="form-group">
            <input type="submit" class="btn btn-sucess" value="Salvar alterações">
              <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>"> <!--COMANDO PARA ELE NAO PERDER O GET, COM ISSO CRIEI UMA VARIAVEL ESCONDIDA-->

            </div> 
            </form>
            <a href="index.php" class="btn btn-info">Inicio</a>
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