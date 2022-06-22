<!--CONEXAO COM BANCO DE DADOS-->
<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "almirempresa";

    if ( $connect = mysqli_connect($server, $user, $pass, $bd)){
        //echo "Conectado!";
    } else
        echo "Erro!";

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo role='alert'>
         $texto
        </div>";
    }    

//Para alterar o jeito de mostrar a data//
    function mostra_data($data){
        $d = explode('-', $data);
        $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
        return $escreve;
    }

?>