<?php  
  function Erro($pMsg){
    http_response_code('403');
    die($pMsg); 
  }
?>