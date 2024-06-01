<?php 

$servidor = 'localhost';
$banco_de_dados = 'jam_final_CY3_sabado';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

if ($mysqli -> error)
{
    die('Falha ao se conectar ao banco de dados: ') . $mysqli->error;
}
?>