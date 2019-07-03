<?php
//Formas básicas de exibição
//echo e print

// echo 'Forma padrão de exibição do PHP'; //Sem retorno (void), mais rápido em relação ao print
// print 'Forma menos utilizada'; //Retorna 1

echo 'print retorna: '.print('');//Saída: print retorna: 1

$variavel = 12;
//Inclusão de variaveis na string
//Sem concatenação
	//Aspas simples permitem o uso direto da variável sem concatenação
echo '<br/>Aspas simples echo: $variavel <br/>';//Saída: Aspas simples echo: $variavel
echo "Aspas duplas echo: $variavel <br/>";//Saída: Aspas duplas echo: 12
print 'Aspas simples print: $variavel <br/>';//Saída: Aspas simples print: $variavel
print "Aspas duplas print: $variavel <br/><br/><br/>";//Saída: Aspas duplas: print 12

//Com concatenação
echo 'Aspas simples echo: '.$variavel.' <br/>';//Saída: Aspas simples echo: 12
echo "Aspas duplas echo: ".$variavel." <br/>";//Saída: Aspas duplas echo: 12
print 'Aspas simples print: '.$variavel.' <br/>';//Saída: Aspas simples print: 12
print "Aspas duplas print: ".$variavel." <br/><br/><br/>";//Saída: Aspas duplas print: 12

$a = "A";
$b = "B";

$arr = array("umachave" => "umvalor");//Criando array

echo "Aqui está {$arr['umachave']} com echo!<br/>";//Saída: Aqui está umvalor com echo!// Exibindo array no echo com aspas duplas, note o uso de chaves{}
print "Aqui está {$arr['umachave']} com print!<br/>";//Saída: Aqui está umvalor com print!


echo $a." echo<br/>";//Saída: A echo
print $a." print<br/>";//Saída: A print
echo $a,$b;//Saída: AB
//print $a,$b;//Saída: Erro, print não suporta mais de um parâmentro

echo '<br/>Essa ', 'string ', 'está ', 'passando ', 'múltiplos parâmetros.<br/><br/>';//Saída: Essa string está passando múltiplos parâmetros.


echo "<br/>Usando echo com aspas em string sem \"Desconfigurar\".<br/><br/>";//Saída: Usando echo com aspas em string sem "Desconfigurar".
print "<br/>Usando print com aspas em string sem \"Desconfigurar\".<br/><br/>";//Saída: Usando print com aspas em string sem "Desconfigurar".

echo <<<END
Um bloco de texto com echo, podendo exibir variáveis como: $a $b

até mesmo {$arr['umachave']}
<br/><br/><br/>
END;
//Saída: Um bloco de texto com echo, podendo exibir variáveis como: A B até mesmo umvalor 

print <<<END
Um bloco de texto com print, podendo exibir variáveis como: $a $b

até mesmo {$arr['umachave']}
<br/><br/><br/>
END;
//Saída: Um bloco de texto com print, podendo exibir variáveis como: A B até mesmo umvalor 

$teste = true;
//($teste) ? echo 'true' : echo 'false';//Saída: Erro!

($teste) ? print 'true print<br/>' : print 'false print<br/>';//Saída: true print

echo $teste ? 'true echo': 'false echo';//Saída: true echo
// print $teste ? 'true echo': 'false echo';//Saída: Erro!


//printf e sprintf

//printf: Mostra uma string formatada
printf('<br/><br/>Uso básico do printf %s e %s e %d<br/><br/>', 'primeiro', 'segundo', 3);//Saída: Uso básico do printf primeiro e segundo e 3
$num = 2.12345; 
printf("Arredondando 2.12345 pra duas casas após a vírgula com printf: %.2f<br/><br/>",$num);//Saída: Arredondando 2.12345 pra duas casas após a vírgula com printf: 2.12

//sprintf: Retorna a string formatada
$data = sprintf("%02d-%02d-%04d<br/><br/>", 12, 12, 1998);
echo $data;//Saída: 12-12-1998

$n = 362525200;
echo sprintf("Notação científica: %.3e<br/><br/>", $n); //Saída: Notação científica: 3.625e+8


//var_dump e print_r
	//var_dump: Exibe informações detalhadas da variável
	//print_r: Exibe informações básicas da variável

print_r($variavel);//Saída: 12
var_dump($variavel);//Saída: C:\caminho_ate\basico-php\01-Exibicao.php:87:int 12

$variavel02 = array('Teste', 5, false, 4.5);//Criando um array com valores e tipos variádos

print_r($variavel02);//Saída: Array ( [0] => Teste [1] => 5 [2] => [3] => 4.5 )
var_dump($variavel02);//Saída: C:\caminho_ate\basico-php\01-Exibicao.php:92:
// array (size=4)
//   0 => string 'Teste' (length=5)
//   1 => int 5
//   2 => boolean false
//   3 => float 4.5
