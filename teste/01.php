<?php
  //com o fgc funcionou
  #$result = file_get_contents('http://127.0.0.1/aula/escola/teste/02.php');
  
  //com curl também funcionou e com melhor desempenho
  //$curl = curl_init('http://127.0.0.1/aula/escola/teste/02.php');
  //curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  //$result = curl_exec($curl);
  
  $json[] = array('res' => 'teste2123');
  
  //configure CURL
  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_POST => 1,
    CURLOPT_URL => 'http://127.0.0.1/aula/escola/teste/02.php',
    //CURLOPT_USERPWD => USERNAME . ':' . PASSWORD,
    CURLOPT_POSTFIELDS => json_encode($json),
    CURLOPT_HTTPHEADER => array('Content-type: application/json'),
    CURLOPT_RETURNTRANSFER => false
  ));
  $result = curl_exec($ch) or die('teste');  
  curl_close($ch);

  $data = json_decode($result) or die('teste 2');
  $row = $data[0];
  echo $row->res;  
?>