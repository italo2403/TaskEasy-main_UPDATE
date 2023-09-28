
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskEasy</title>
    <link rel="stylesheet" href="assets/css/cadastro.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
    <header>
        <a href="index.html" class="logo"> TASKEASY</a>
        <a href="login.html">Entrar</a>
    </header>
    <div id="campos" class="center">
        <h1>Cadastre-se</h1>
        <form action="cadastro.php" method="post">

            <label for="nome_completo">Nome Completo</label>
            <input type="text" name="nome_completo" id="nome_completo" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            <button type="submit" class="button button1" value="Enviar">Enviar</button>
            <!-- <button id="Cadastro" class="button button1">Continuar</button> -->
        </form>
    </div>

    <!-- <script>
        document
            .getElementById("eyeButton")
            .addEventListener("click", function () {
                var senhaInput = document.getElementById("senha");
                if (senhaInput.type === "password") {
                    senhaInput.type = "text";
                } else {
                    senhaInput.type = "password";
                }
            });
    </script> -->
</body>

</html>