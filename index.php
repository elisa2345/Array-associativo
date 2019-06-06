<?php
//como se lê ?"há um array chamado alunos com 3 posições .Em cada uma das posições há um
//array associativo com tres par-valor.As chaves do array associativo sao: nome,dt_nascimento
//e cidade. Cada par-valor é separado por vírgula e para definir o valor de uma chave usa-se 
// o operador de associação: =>
$alunos= array(array("nome" => "Gabriela", "dt_nasc"=> "03/02/2003","cidade"=> "Mococa"),
array("nome" => "Agatha" , "dt_nasc"=> "22/10/2003", "cidade" => "Mococa"),
rray("nome" => "Allyson", "dt_nasc"=> "15/07/2003","cidade"=> "Mococa")),
rray("nome" => "Ana xavier", "dt_nasc"=> "09/10/2002","cidade"=> "Marte"));

//como se lê?"acessando o indice1 do array alunos.no indice 1 ha outro array,um associativo
//onde há uma chave chamada nome e deverá mostrar "Agatha".
echo $alunos[1]['nome'];

//Navegando pelos indices do array no navegador : ex: http://localhost:8000?i-3
$indice= $-GET['i'];

//no exemplo acima i=3 mostraria os dados da quarta posiçãos do array (i = 3)
echo $alunos[$indice]['nome']."<br/>"; // mostraria Ana xavier
 
var_dump($alunos);
?>