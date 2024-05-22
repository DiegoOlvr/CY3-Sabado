<?php 
session_start();
$nome_usuario = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Bem vindo <?php echo $nome_usuario;?> </h1>
    <p> <a href="logout.php" > Sair </a> </p>
    <footer>
        <p>"Não concordo nem discordo, muito pelo contrário"</p>
    </footer>
</body>
</html>