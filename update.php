<?php 
	include_once("conexao.php");
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$id = $_POST['id'];
	
	$sql = "UPDATE dados SET nome = '$nome',email = '$email',endereco = '$endereco',telefone = '$telefone' WHERE id= $id";
	$q = $conexao->query($sql) or die ($conexao->error);
	
	if($q){
		echo $nome." Atualizado com sucesso";
	}else{
		echo "Erro";
	}

?>