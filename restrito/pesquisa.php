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

    <title>Pesquisar</title>
  </head>
  <body>
    <?php 

        $pesquisa = $_POST['busca']??'';
     include "conexao.php";
     $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
     $dados = mysqli_query($connect, $sql); 
     ?>



    <!--CRIANDO DIVISOES-->

    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Pesquisar</h1>
            <nav class="navbar navbar-light bg-light">
    <form class="form-inline" action="pesquisa.php" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    </nav>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Funções</th>
    </tr>
  </thead>
  <tbody> <!--corpo da tabela-->

  <?php
     while ($linha = mysqli_fetch_assoc($dados)) {
        $cod_pessoa = $linha['cod_pessoa'];
        $nome = $linha['nome'];
        $endereco = $linha['endereco'];
        $telefone = $linha['telefone'];
        $email = $linha['email'];
        $data_nascimento = $linha['data_nascimento'];
        $data_nascimento = mostra_data($data_nascimento);
        $foto = $linha['foto'];
        if (!$foto == null){
          $mostra_foto = "<img src='img/$foto' class='lista_foto'>";
        } else{
          $mostra_foto = '';
        }


        //PARA LEVAR A VARIAVEL DO GET PELA URL//
        echo "<tr>
            <th>$mostra_foto</th>
            <th scope='row'>$nome</th>
            <td>$endereco</td>
            <td>$telefone</td>
            <td>$email</td>
            <td>$data_nascimento</td>
            <td width=150px>
            <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
            <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
            onclick=" .'"' ."pegar_dados($cod_pessoa, '$nome')" .'"' .">Excluir</a>
        </td>

        </tr>";
     }
     
    ?>

    <!--  -->

  </tbody>
</table>

            <a href="index.php" class="btn btn-info">Inicio</a>
            </div>
        </div>
    </div>

<!-- Modal DE BOTAO CONFIRMACAO -->
<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="excluir_script.php" method="POST">
           <p>Deseja realmente excluir <b id="nome_pessoa">Nome do pessoa</b>?</p>           
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              <input type="hidden" name="nome" id="nome_pessa_1" value="">
              <input type="hidden" name="id" id="cod_pessoa" value="">
              <input type="submit" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>


<!-- FUNCAO JAVA QUE VAI PEGAR DADOS PARA EXCLUIR-->
<script type="text/javascript">
      function pegar_dados(id, nome) {
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('nome_pessa_1').value = nome;
        document.getElementById('cod_pessoa').value = id;
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>