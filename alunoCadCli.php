<html>
<head>
  <meta charset="utf-8"/>
  <title>Cadastro de alunos</title>
</head>
<body>
  <h1>Cadastro de alunos</h1>

  <form method="post" action="aluno.php">
    <input type="hidden" name="tipo" value="I">
    Nome:<input type="text" name="nome">
    <?php
    include "conexao.php";
    
    echo '<select name="materia">';
      $sql = 'select * from materia';
      $qry = mysqli_query($con, $sql);      
      while ($row = mysqli_fetch_array($qry)){
        echo '<option value="'.$row['id'].'">'.$row['descricao'].'</option>"';
      }
    echo '</select>';
    
    ?>
    <input type="submit" value="Salvar">
  </form>
</body>
</html>