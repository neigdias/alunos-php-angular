<?php
	include_once '../model/aluno.php';

  $method = $_SERVER['REQUEST_METHOD'];  
  //$request = split("/", substr(@$_SERVER['PATH_INFO'], 1));

	#recebe o json passado por parâmetro
	$data = file_get_contents("php://input");
		
	switch ($method) {
		case 'PUT':
			break;
		case 'POST':
		  $objData = json_decode($data);

			$aluno = new Aluno();
			$aluno->setNome($objData->nome);
			$aluno->setMateria($objData->idMateria);
			echo $aluno->save();
			break;
		case 'GET':
			$aluno = new Aluno();
      
      if(isset($_SERVER['PATH_INFO']))
        $id = explode('/',$_SERVER['PATH_INFO']);
      else
        $id = 0;
      
      if ($id == 0)
			  echo $aluno->listAll();
      else
        echo $aluno->lista($id[1]);
			break;
		case 'DELETE':
		  $objData = json_decode($data);
			$aluno = new Aluno();
			$aluno->setId($objData->id);
		  echo $aluno->remove();
			break;
	}
?>