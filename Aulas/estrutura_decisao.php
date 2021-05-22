<?php
	#if
	#if...else
	#if...elseif...else
	#switch

	$a = 5;
	$b = 6;
	$soma = $a + $b; 
	if ($a == $b){
		echo ("A variavel a é igual a variavel b");
	}

	elseif ($a + $b = 11){
		echo ("as variaveis estão sendo somadas");
	}

	else{
		echo ("As variaveis não sao iguais");
	}
		#instrucao SWITCH
		$destino="New York";
  	   switch ($destino) {
  	        case "São Paulo":
  	             echo 'Seja bem vindo a cidade que nunca para!';
  	             break;
  	        case "Paris":
  	             echo 'Seja bem vindo a cidade Luz!';
  	             break;
  	        case "New York":
  	             echo 'Seja bem vindo a Big Apple!';
  	             break;
  	        case "Rio de Janeiro":
  	             echo 'Seja bem vindo a cidade maravilhosa!';
  	             break;
  	        default:
  	             echo 'Não encontramos seu destino!';
						}


		#ESTRUTURAS DE REPETIÇÃO
		#FOR, FOR EACH, WHILE, DO WHILE

		for ($i=1;$i<=10;$i++) {
			echo $i . " ";
 		}
?>