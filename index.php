<?php 
	
?>




<!DOCTYPE html>
<title>Agenda Ayrton</title>

<head>
	

</head>


<body>

<h3>Agenda - ula ula</h3>
<?php 
	
	if($_GET){

?>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			<input type="text" name="nome" placeholder="Digite o seu nome" value="<?php echo $_GET['nome'] ?>"><br><br>
			<input type="email" name="email" placeholder="Digite o seu email" value="<?php echo $_GET['email'] ?>"><br><br>
			<input type="text" name="endereco" placeholder="Digite seu endereco" value="<?php echo $_GET['endereco'] ?>"><br><br>
			<input type="text" name="telefone" placeholder="Digite seu telefone" value="<?php echo $_GET['telefone'] ?>"><br><br>
			

			<input type="submit" value="Atualizar">

		</form>

<?php 
	}else{ 
?>
<form action="insere_dados.php" method="POST">
	<input type="text" name="nome" placeholder="Digite o seu nome"><br><br>
	<input type="email" name="email" placeholder="Digite o seu email"><br><br>
	<input type="text" name="endereco" placeholder="Digite seu endereco"><br><br>
	<input type="text" name="telefone" placeholder="Digite seu telefone"><br><br>
	
	<input type="submit" value="Salvar">

</form>

	<?php } ?>


<h2>Pessoas na sua agenda</h2>

<table>
	<th>ID</th>
	<th>NOME</th>
	<th>EMAIL</th>
	<th>ENDEREÇO</th>
	<th>TELEFONE</th>
	
<?php 

	include_once("conexao.php");
	
	$sql = "SELECT * FROM dados";
	$q = $conexao->query($sql) or die ($conexao->error);
	
	
	while($linha = $q->fetch_array()){
		?>
		
		<tr>
			<td><?php echo $linha['id'] ?></td>
			<td><?php echo $linha['nome'] ?></td>
			<td><?php echo $linha['email'] ?></td>
			<td><?php echo $linha['endereco'] ?></td>
			<td><?php echo $linha['telefone'] ?></td>
			<td><a href="index.php?nome=<?php echo $linha['nome']?>&
					email=<?php echo $linha['email']?>&
					endereco=<?php echo $linha['endereco']?>&
					telefone=<?php echo $linha['telefone']?>&
					id=<?php echo $linha['id']?>"> atualizar </a></td>
			<td><a href="apagar.php?id=<?php echo $linha['id']?>"> apagar </a></td>
		</tr>
		
		
		
	<?php 	
		}
	?>


</table>



</body>



</html>


