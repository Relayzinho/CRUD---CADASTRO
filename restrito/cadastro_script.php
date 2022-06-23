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

    <div class="container">
        <div class="row">
        <?php
          include "conexao.php";
          
          $nome = $_POST['name'];
          $endereco = $_POST['endereco'];
          $telefone = $_POST['telefone'];
          $email = $_POST['email'];
          $data_nascimento = $_POST['data_nascimento'];

          $foto = $_FILES['foto'];
          $nome_foto = mover_foto($foto);
          if ($nome_foto == 0) {
            $nome_foto = null;
          } 
          

           $sql = "INSERT INTO `pessoas` ( `nome`, `endereco`, `telefone`, `email`, `data_nascimento`, `foto`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento', '$nome_foto')";

           if (mysqli_query($connect, $sql)) {
            if ($nome_foto != null){
              echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
            }
            mensagem("$nome Cadastrado com sucesso!", 'success');
           } else {
            mensagem("$nome Nao foi cadastrado!", 'danger');
           }
           
        ?>
        <hr>
        <a href="cadastro.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>