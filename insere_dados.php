<?php 

	include_once("conexao.php");
	
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	
	$sql = "INSERT INTO dados (nome,email,endereco,telefone) VALUES ('$nome','$email','$endereco','$telefone')";
	$q = $conexao->query($sql) or die($conexao->error);
	
	if($q){
		echo "Funcionou, $nome inserido com sucesso.";
	}else{
		echo "Não funcionou";
	}
	
	
	
?>