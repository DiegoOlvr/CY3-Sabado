<?php 
include('conexao.php');

if ( isset($_POST['email']) || isset($_POST['pass']) )
{
    if (strlen($_POST['email']) == 0)
    {
        echo "Preencha o seu e-mail";
    }
    else if (strlen($_POST['pass']) == 0)
    {
        echo "Preencha a sua senha";
    }
    else
    {
        // EMAIL E SENHA DO FORMULÁRIO
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        // COMANDO SQL PARA VER SE O USUARIO EXISTE
        $sql_codigo = "SELECT * FROM dados WHERE email = '$email' AND senha = '$pass'";
        // LANÇAR CODIGO NO BANCO DE DADOS
        $sql_query = $mysqli->query($sql_codigo) or die("Falha de execução: ". $mysqli->error);
        
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1)
        {
            $usuario = $sql_query->fetch_assoc();
            var_dump($usuario['nome']);
            var_dump($usuario['id']);

        }
        else 
        {
            echo "Falha ao logar!!!";
        }
    }

}

?>

