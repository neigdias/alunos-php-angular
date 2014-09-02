<?php
  #Comando de conexão
  $servidor ="localhost";  //nome do servidor
  $usuario = "root";  //nome do usuário
  $senha = "";        //senha do banco de dados
  $banco = "escola";  //nome do banco de  dados
  $con = mysqli_connect($servidor, $usuario, $senha, $banco);  //comando de conexão
   
  //comando que exibe mensagem de erro caso não consiga conectar
  //$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Não foi possível efetuar conexão com o Banco.");
?>
