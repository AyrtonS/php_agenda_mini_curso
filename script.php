<?php 
/*
	$a = "ayrton";
	$b = "ayrton";
	
	if($a == $b){
		echo "iguais";
	}else{
		echo "diferentes";
	}
*/
	
	
	criaVetor();
	
	
	function criaVetor(){
		
		$i = 0;
		
		$vetor = array();
		$vetor[0] = "Ayrton";
		$vetor[1] = "Jonas";
		$vetor[2] = "Andre";
		$vetor[3] = "Dheisson";
		$vetor[4] = "Paulin";

		for($i = 0;$i <= 4;$i++){
			echo $vetor[$i]."<br>";
		}
			
	} // fim da funcao
	
	$numero1 = 4;
	$numero2 = 8;

	echo "A soma de $numero1 + $numero2 eh igual a : ".soma_dois_numeros($numero1,$numero2);
	
	function soma_dois_numeros($numero1,$numero2){
		
		$soma = $numero1 + $numero2;
		return $soma;
		
	}
	
	
	

/*

	while($i < 4){
		echo $vetor[$i]."<br>";
		$i++;
	}
*/


	
/*
	$dict = array();
	$dict["ayrton"] = "sousa";
	$dict[3] = "oi";
	
	echo $dict["ayrton"]."<br>";
	echo $dict[3]."<br>";
	
	$dict["www.google.com"] = "120.200.43.55";
	echo $dict["www.google.com"];
*/	

	
	
?>