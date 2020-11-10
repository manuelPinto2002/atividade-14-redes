<?php
//var_dump($_GET);
if (strlen($_GET['txt_nome'])>0&& strlen($_GET['txt_idade'])>0) {
$nome=$_GET['txt_nome'];
$idade=$_GET['txt_idade'];
}
else{
	$nome="erro";
	echo $nome;
	$idade="erro";
	echo $idade;
}
echo "Nome: ".$nome. "<br>";
echo "Idade: ".$idade;
  ?>