<?php 

include('../Connections/conection.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $cod_sql = "DELETE FROM produtos WHERE id='$id'";

    if($mysqli->query($cod_sql) === TRUE)
    {
        header('Location: listar_produtos.php');
        exit();
    }
    else 
    {
        echo 'Deu ruim, pq??????????' . $mysqli->error;
    }
}

$mysqli->close();
?>