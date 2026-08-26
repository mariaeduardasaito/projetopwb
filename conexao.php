<?php

$servidor ="localhost";
$banco = "AulaBD";
$senha = "";
$usuario = "root";

$sql ="Create database if not exists AulaBD;";

//conexao sem escolher o banco
$conexao = mysqli_connect($servidor, $usuario, $senha);

//criação automatica do bd
$resultado = mysqli_query($conexao, $sql);

//seleciono o banco recem criado
mysqli_select_db($conexao, "AulaBD");

?> 