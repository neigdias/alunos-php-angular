<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
  <?php
    include "conexao.php";
    
    #trata a inserção
    if ($_POST['tipo'] == 'I'){
      echo '<p>'. $_POST['materia'];
      
      $sql = "insert into alunos(nome, dtinc, id_materia) values(?,CURRENT_DATE,?)";  
      
      $query = $con->prepare($sql);
      $query->bind_param('si', $_POST['nome'], $_POST['materia']);
      $query->execute() or die('Erro ao inserir o aluno.');
      
      echo "Aluno cadastrado com sucesso.";
    };
  ?>
</body>
</html>