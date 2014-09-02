<?php
  include "conexao.php";
  include "util.php";
  try{  
    #recebe o json passado por parâmetro
    $data = file_get_contents("php://input");
    
    #Cria um stdClass
    $objData = json_decode($data);

    $sql = "insert into alunos(nome, dtinc) values(?, current_date)";

    $query = $con->prepare($sql) or die(erro('erro ao preparar o sql'));
    $query->bind_param('s', $objData->data) or die(erro('erro no bind'));
    $query->execute() or die(erro(mysqli_error($con)));

    $json[] = array('nome',$objData->data);

    echo json_encode($json);
  }
  catch(Exception $e){
    Erro('erro ao inserir o aluno.');  
  }
?>