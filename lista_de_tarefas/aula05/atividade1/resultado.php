<?php 

    $name = $_GET["name"];
    $last_name = $_GET["last_name"];
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $op = $_GET["op"];
    
    $full_name = "$name $last_name";
    $result = $n1 + $n2;
    
?>
<!doctype html>
<html>
    
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado:</h1>
        <p>
            <?php echo "$full_name, o resultado é: $result"; ?>
        </p>
    </body>
</html>