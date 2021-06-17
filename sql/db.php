<?php

// Definimos aqui os parâmetros para gerar uma conexão MYSQLI 
$servidor = "localhost";
$nomeBD = "";
$usuarioBD = "root";
$senhaBD = "";

// Criamos uma conexão MYSQLI
$conexao = new mysqli($servidor, $usuarioBD, $senhaBD, $nomeBD);

// Verificação de erro
if($conexao ->connect_errno){
    echo "Falha ao conectar: (".$conexao->mysqli_errno.") ".$conexao->connect_error;

    //ab
}





?>