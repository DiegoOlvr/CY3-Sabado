<?php 
// ACESSAR O BANDO DE DADOS
include('../Connections/conection.php');

// QUERY PARA PEGAR INFORMAÇÕES
$sql = 'SELECT * FROM produtos';

// EXECUTAR A QUERY
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar produtos</title>
</head>
<body>
    <main>
        <h1>
            Estoque
        </h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
                if($resultado->num_rows > 0)
                {
                    while($linha = $resultado->fetch_assoc())
                    {
                        echo '<tr>';
                            echo '<td>' . $linha['id'] . '</td>';
                            echo '<td>' . $linha['nome'] . '</td>';
                            echo '<td>' . $linha['valor'] . '</td>';
                            echo '<td>' . $linha['quantidade'] . '</td>';
                            echo '<td><a href="editar_produto.php?id='. $linha['id'] .'">Editar</a> | <a href="deletar_produto.php?id='. $linha['id'] .'">Deletar</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
        </table>

    </main>
</body>
</html>