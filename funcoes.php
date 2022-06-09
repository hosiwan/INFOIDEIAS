<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */

    public function SeculoAno(int $ano): int {
        return ($ano - 1) / 100 + 1;
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
      
         do{
         $resultado=0;  
         $numero=$numero-1;
         for ($i = 2; $i <= $numero / 2; $i++) {
             
            if ($numero % $i == 0) {
               $resultado++;
               break;
            } 
         }
         } while ($resultado == 1);
         
           return $numero;
        
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
    $array = $arr;

	foreach ($array as $valor) {
	    foreach ($valor as $valores) {
	       $lista[] = $valores;
	        arsort($lista);
	        $segundoElemento = array_slice($lista,1);
	        $resultado = reset($segundoElemento);
	     }
	}
	
	return $resultado;
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
	public function SequenciaCrescente(array $arr): bool {
    // Obs: modifiquei o Datatype Bolean para bool, embora tenha a regra "Essa estrutura e o datatype de retorno devem ser respeitados.", pois como estava, ocorria erro de síntaxe, do qual não consegui solucionar       
        $array = $arr;
        $count = count($array);  

        for ($i=0; $i <= $count; $i++) {
    	    $array = $arr;
    
            array_splice($array,$i,1);
    
    	    $ordem_original = $array;
    	    $ordem_modificada = $array;
    
    	     sort($ordem_modificada);
    	    
    	    $compare = array_diff_assoc($ordem_original , $ordem_modificada);
    	    
        	    if ($compare==true){
        	       $array_boleano[] = "false";
        	    } else {
        	         $duplicada = array_unique($ordem_original);
        	         if(count($duplicada) != count($ordem_original)) {
        	             $array_boleano[] = "false";
                    } else {
                         $array_boleano[] = "true";
                    }
        	    }
            }
            if ($boleano = in_array("true", $array_boleano)){
                return true;
            } else {
                return false;
            }
        }
 
    
}

$funcoes = new Funcoes;

echo "==============TESTANDO O ALGORITMO DE CALCULAR O SÉCULO CONFORME O ANO INFOMADO==================\n";
$ano = $funcoes->SeculoAno(1905);
echo "Ano 1905 = Século $ano\n";
$ano = $funcoes->SeculoAno(1700);
echo "Ano 1700 = Século $ano\n";

echo "===========TESTANDO O ALGORITMO DE OBTER O NÚMERO PRIMO DECRESCENTE MAIS PRÓXIMO============\n";
$numero1 = 10;
$numero2 = 29;
$PrimoAnterior1 = $funcoes->PrimoAnterior($numero1);
$PrimoAnterior2 = $funcoes->PrimoAnterior($numero2);
if ($PrimoAnterior1<2 || $PrimoAnterior2<2)
   echo "Não há número primo abaixo de 2,\nPor favor, informe um valor superior\n";
else
   echo("O número primo anterior de $numero1 é $PrimoAnterior1\n");
   echo("O número primo anterior de $numero2 é $PrimoAnterior2\n");
   
echo "====TESTANDO O ALGORITMO DE OBTER O 2° MAIOR ELEMENTO DE UM ARRAY MULTIDIMENSIONAL====\n";   
$array = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
$SegundoMaior = $funcoes->SegundoMaior($array);
echo "O segundo maior valor do array multidimensional informado é $SegundoMaior";

echo "\n====TESTANDO O ALGORITMO QUEM TEM UMA RESPOSTA BOLEANA, A RESPEIO DA POSSIBILIDADE DE TER UMA ORDEM CRESCENTE REMOVENDO UM ITEM====\n";
$array_mult[] = array(1, 3, 2, 1);
$array_mult[] = array(1, 3, 2);
$array_mult[] = array(1, 2, 1, 2);
$array_mult[] = array(3, 6, 5, 8, 10, 20, 15);
$array_mult[] = array(1, 1, 2, 3, 4, 4);
$array_mult[] = array(1, 4, 10, 4, 2);
$array_mult[] = array(10, 1, 2, 3, 4, 5);
$array_mult[] = array(1, 1, 1, 2, 3);
$array_mult[] = array(0, -2, 5, 6);
$array_mult[] = array(1, 2, 3, 4, 5, 3, 5, 6);
$array_mult[] = array(40, 50, 60, 10, 20, 30);
$array_mult[] = array(1, 1);
$array_mult[] = array(1, 2, 5, 3, 5);
$array_mult[] = array(1, 2, 5, 5, 5);
$array_mult[] = array(10, 1, 2, 3, 4, 5, 6, 1);
$array_mult[] = array(1, 2, 3, 4, 3, 6);
$array_mult[] = array(1, 2, 3, 4, 99, 5, 6);
$array_mult[] = array(123, -17, -5, 1, 2, 3, 12, 43, 45);
$array_mult[] = array(3, 5, 67, 98, 3);
foreach ($array_mult as $list) {
   $SequenciaCrescente[] = $funcoes->SequenciaCrescente($list);
}
echo json_encode($SequenciaCrescente);

// Meu muito obrigado por me terem popocionado essa excelente experiência
// Rosivan Santos

?>