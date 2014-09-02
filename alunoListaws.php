<?php
  include "conexao.php";
  
  #recebe o json passado por parâmetro
  $data = file_get_contents("php://input");
 	
  $search = '';
  
  if ($data != ''){
    #Cria um stdClass
    $objData = json_decode($data);

    #Como objData passa a ser um objeto, vamos capturar apenas o parametro que queremos
    $search = " where nome like '%$objData->data%'";
  }
  
  $sql = "select * FROM alunos" . $search;  

  $query = mysqli_query($con, $sql);
  
  while ($row = mysqli_fetch_object($query)){
    $json[] = array('id' => $row->id, 'nome' => $row->nome); 
  }
  echo json_encode($json);
?>
