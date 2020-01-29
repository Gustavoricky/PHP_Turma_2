<?php
/**
 * PROCESSAMENTO DE DADOS - BACK-END
 */
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
    $name = "";
    $last_name = "";
    $n1 = "";
    $n2 = "";
    $op = "";

    $result = "";
    
    $msg = "";
} else if ($method == "POST") {
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];

    if ($op == "+") {
        $result = $n1 + $n2;
    } else if ($op == "-") {
        $result = $n1 - $n2;
    } else if ($op == "*") {
        $result = $n1 * $n2;
    } else if ($op == "/") {
        $result = $n1 / $n2;
    }
    
    $msg = "$name $last_name, o resultado é: $result";
}
?>

<!-- VISUAL - FRONT-END -->
<!doctype html>
<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Calculadora V2</h1> 
        <form method="POST">
            <p>
                <label>Nome: </label>
                <input type="text" name="name" value="<?= $name ?>"/>
            </p>
            <p>
                <label>Sobrenome: </label>
                <input type="text" name="last_name" value="<?= $last_name ?>"/>
            </p>
            <p>
                <label>Número 1: </label>
                <input type="number" name="n1" value="<?= $n1 ?>"/>
            </p>
            <p>
                <label>Número 2: </label>
                <input type="number" name="n2" value="<?= $n2 ?>"/>
            </p>
            <p>
            <fieldset>
                <legend>Operação: </legend>
                <p>
                    <input type="radio" name="op" value="+" <?= $op == "+" ? "checked" : "" ?>/>
                    <label>Soma</label>
                </p>
                <p>
                    <input type="radio" name="op" value="-" <?= $op == "-" ? "checked" : "" ?>/>
                    <label>Subtração</label>
                </p>
                <p>
                    <input type="radio" name="op" value="*" <?= $op == "*" ? "checked" : "" ?>/>
                    <label>Multiplicação</label>
                </p>
                <p>
                    <input type="radio" name="op" value="/" <?= $op == "/" ? "checked" : "" ?>/>
                    <label>Divisão</label>
                </p>
            </fieldset>
        </p>
        <p>
            <input type="submit" value="Calcular" />
        </p>
    </form>
    <p><?= $msg ?></p>
</body>
</html>