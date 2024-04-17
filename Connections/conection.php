<?php 

$servidor = 'Localhost';
$banco_de_dados = 'test';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

if ($mysqli -> error)
{
    die('Falha ao se conectar ao banco de dados: ') . $mysqli->error;
}
?>