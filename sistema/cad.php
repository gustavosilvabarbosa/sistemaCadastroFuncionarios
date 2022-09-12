<?php
//validar o formulário
$id = $_POST ['id'];
$nome = $_POST ['nome'];
$cargo = $_POST ['cargo'];
$sal = $_POST ['sal'];
$qtddep = $_POST ['qtddep'];

//gravar infos de formulários nos arquivos
$refFile = fopen("cadastros/$id.txt","a+");


fwrite($refFile,"Id:".$id."\n"."Nome:".$nome."\n"."Cargo:".$cargo."\n"."Salário:".$sal."\n"."Qtd Dependentes:".$qtddep);

fclose($refFile);

//usar o Scandir (ver documentação) para listar os nomes de arquivos criados

$abc = scandir("cadastros");

array_shift($abc);
array_shift($abc);

//criar automaticamente links que possam levar ao arquivo
foreach($abc as $def){
echo "<a href='readInfo.php?id=$def'>$def</a><br>";
}
