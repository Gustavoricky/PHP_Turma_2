<?php
    $email = $_GET["email"];
    $password = $_GET["password"];
    $name = $_GET["name"];
    $last_name = $_GET["last_name"];
    $full_name = "$name $last_name"; // string avaliada (evaluated)

?>
<html>
    <head>
        <title>Dados</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>Usuário Logado: <?php echo $name; ?> - <?php echo $email; ?></p>
        <h1>Recebendo dados</h1>
        <p>
            E-mail: <?php echo $email; ?>
        </p>
        <p>
            Senha: <?php echo $password; ?>
        </p>
        <p>
            Nome: <?php echo $name; ?>
        </p>
        <p>
            Sobrenome: <?php echo $last_name; ?>
        </p>
        <p>
            Nome Completo: <?php echo $full_name; ?>
        </p>

    </body>
</html>