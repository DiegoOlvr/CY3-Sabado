<?php 

include('../Connections/conection.php');

// INICIAR SESSÃO
session_start();

if (isset($_SESSION['user']))
{
    header('Location: painel.php');
}
else
{
    if( isset($_POST['user']) && isset($_POST['password']) )
    {
        $name_user = $_POST['user'];
        $pass_user = $_POST['password'];
        var_dump($name_user, $pass_user);
        
        $sql_code = "SELECT * usuario WHERE user = $name_user AND password = $pass_user";

        $sql_result = $mysqli->query($sql_code);
        var_dump($sql_result);

        if ($sql_result->num_rows > 0)
        {
            echo 'foi';
        }
        else
        {
            echo 'não';
        }

    }
}
?>