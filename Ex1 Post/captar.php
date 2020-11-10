<?php
if (strlen($_POST['txt_nome'])>0&& strlen($_POST['txt_idade'])>0) {
$nome=$_POST['txt_nome'];
$idade=$_POST['txt_idade'];
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