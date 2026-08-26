<?php

include "conexao.php";

$sql= "
CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    login VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    ativo BOOLEAN NOT NULL DEFAULT TRUE
);"
;

$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    echo "Banco instalado com sucesso";
} else {
    echo "Houve um erro ao instalar o banco" ;
}
?>