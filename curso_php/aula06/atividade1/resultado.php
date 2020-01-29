<?php
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
} else {
    $result = "Operação inválida. Tente novamente";
}
?>

<!doctype>
<html>
    <head>
        <title>Resultado</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1><?php echo "$name $last_name"; ?></h1>
        <p>O resultado é: <?php echo $result; ?> </p>
    </body>
</html>