<?php 
    include('../PHP/Connections/conn.php');
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
            
            $sql_code = "SELECT * FROM users WHERE user = '$name_user' and password = '$pass_user'";

            $sql_result = $mysqli->query($sql_code);

            $quantidade_linhas = $sql_result->num_rows;

            if ($quantidade_linhas >= 1)
            {
                $dados = $sql_result->fetch_assoc();
                $name_user_db = $dados['user'];
                $password_user_db = $dados['password'];

                if( $name_user == $name_user_db && $password_user_db == $pass_user)
                {
                    $_SESSION['user'] = $name_user;
                    header('Location: painel.php');
                }
                else
                {
                    header('Location: index.php?login_errado');
                    
                }
            }
            else
            {
                header('Location: index.php?erro');
            }

        }
    }
?>