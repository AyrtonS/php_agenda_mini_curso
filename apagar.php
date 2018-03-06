<?php 
	include_once("conexao.php");
	$id = $_GET['id'];
	
	$sql = "DELETE from dados WHERE id = $id";
	$q = $conexao->query($sql) or die ($conexao->error);
	
	if($q){
		echo "Apagado com sucesso";
	}else{
		echo "Deu erro";
	}
?>