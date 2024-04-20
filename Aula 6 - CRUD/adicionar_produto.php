<?php
// ACESSAR O BANCO DE DADOS
include('../Connections/conection.php');

// SE TEM INFORMAÇÃO PRA ADICIONAR
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // PEGÁ-LAS E ADICIONAR EM VARIÁVEIS
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    // CODIGO SQL PARA INSERIR -> QUERY
    $sql = "INSERT INTO produtos (id, nome, valor, quantidade) VALUES (NULL, '$nome', '$valor', '$quantidade')";

    // MANDAR PARA O BANCO DE DADOS
    if ($mysqli->query($sql) == TRUE)
    {
        // REDIRECIONAR PARA A PÁGINA CORRETA (MOSTRAR AS INFORMAÇÕES)
        header('Location: listar_produtos.php');
        exit();
    }
    else
    {
        echo 'Deu ruim, sou uma farsa ;-;' . $mysqli->error;
    }
    $mysqli->close();
}



?>