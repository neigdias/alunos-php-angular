<?php
  include "conexao.php";
  
  $sql = "select * FROM alunos";  

  $query = mysqli_query($con, $sql);
  
  echo '<table border=1>';
  echo '<tr>';
    echo '<td>Código</td><td>Aluno</td><td></td>';
  echo '</tr>';
  while ($row = mysqli_fetch_object($query)){
    echo '<tr>';
    echo   '<td>'.$row->id . '</td><td>' .$row->nome .'</td><td><a href=teste.php?id='.$row->id.'>Alterar</a> <a href=teste.php?id='.$row->id.'><img src="lixo.jpg"></a></td>';
    echo '</tr>';
  }
  echo '</table>'
?>
