<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylelogin.css" media="all">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Área restrita</h1>
        <form action="logar.php" method="POST">
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Email" require="require">
            </div>
            <div>
                <label for="pass">Senha:</label>
                <input type="password" name="pass" id="pass" placeholder="Senha" require="require">
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
   <script type="text/javascript" src="js/main.js"></script>
</body>
</html>