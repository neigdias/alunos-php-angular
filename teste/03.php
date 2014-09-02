<?php
  function throwException($message = null,$code = null) {
      throw new Exception($message,$code);
  }

  http_response_code('403');
  die('erro nei');
?>