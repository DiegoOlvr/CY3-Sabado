<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - login com DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div>
        <h1 class="text-light">
            Acesse a sua conta
        </h1>
        <form class="form-control shadow-lg" action="resultado.php" method="post">
            <div>
                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div>
                <label class="form-label" >Senha</label>
                <input class="form-control" type="password" name="pass" required>
            </div>
            <button class="mt-3 w-100 btn btn-success" type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>