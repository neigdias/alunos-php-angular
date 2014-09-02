<?php
  //echo "<p>teste2";
  $data = file_get_contents("php://input");
  
  throw new Exception('Some Error Message',403);
  //$data = json_decode
  
  //echo json_decode($data);
  
  //$json[] = array('res' => 'teste2');
  //echo json_encode($json);
  echo $data;
?>