<?php
include '../util.php';
class Aluno { 
private $id; 
private $nome;
private $materia;
/** * ... * getters e setters * ... * */ 
public function getId(){
  return $this->id;
}

public function setId($pId){
  $this->id = $pId;
}

public function getNome(){
  return $this->nome;
}

public function setNome($pNome){
  $this->nome = $pNome;
}

public function getMateria(){
   return $this->materia;
}

public function setMateria($idMateria){
  $this->materia = $idMateria;
}

public function save() { 
  //logica para salvar cliente no banco 
  include_once "../conexao.php";

	$sql = "insert into alunos(nome, end, id_materia) values(?,'.',?)";  

	$query = $con->prepare($sql) or die(erro('erro ao preparar o aluno-'.mysqli_error($con)));
	$query->bind_param('si', $this->nome, $this->materia) or die(erro('erro no bind-'.mysqli_error($con)));
	$query->execute() or die(erro('erro no execute-'.mysqli_error($con)));
	
	return "Aluno cadastrado com sucesso.";
} 

public function update() { 
// logica para atualizar cliente no banco 
} 

public function remove() { 
  include_once "../conexao.php";

	$sql = "delete from alunos where id = ?";  

	$query = $con->prepare($sql) or die(erro('erro ao preparar o aluno-'.mysqli_error($con)));
	$query->bind_param('i', $this->id) or die(erro('erro no bind-'.mysqli_error($con)));
	$query->execute() or die(erro('erro no execute-'.mysqli_error($con)));
	
	return "Aluno excluído com sucesso.";
} 

public function listAll() { 
  include_once "../conexao.php";

	$sql = "select id, nome from alunos order by nome ";

	$query = mysqli_query($con, $sql);
	while($item = mysqli_fetch_array($query)){
	  $rows[] = $item;
	}
	return json_encode($rows);
}

public function lista($pId){
  include_once "../conexao.php";

	$sql = "select id, nome from alunos where id = $pId";  

	$query = mysqli_query($con, $sql);
	while($item = mysqli_fetch_array($query)){
	  $rows[] = $item;
	}
	return json_encode($rows);
}

}
?>
