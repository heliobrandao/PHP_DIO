<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto'; 

//print_r($categorias);

$nome = 'Eduardo';
$idade = 18;

//var_dump($nome); MOSTRA A VARIAVEL E O TIPO
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
	//echo 'infantil';
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
			echo "O nadador" ,$nome, " compete na categoria " ,$categorias[$i];
	}
}
else if($idade >= 13 && $idade <= 18)
{
	//echo 'adolescente';
		for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'adolescente')
			echo "O nadador" ,$nome, " compete na categoria adolescente";
	}
}

else
{
	//echo 'adulto';
		for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
			echo "O nadador" ,$nome, " compete na categoria adulto";
	}
}