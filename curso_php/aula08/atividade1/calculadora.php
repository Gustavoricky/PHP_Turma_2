<?php
$method = $_SERVER["REQUEST_METHOD"];

?>
<?php if ($method == "GET") { ?>
    <!doctype>
    <html>
        <head>
            <title>Calculadora V2</title>
            <meta charset="UTF-8" />
        </head>

        <body>
            <h1>Calculadora</h1>
            <form method="POST">
                <p>
                    <label>Nome:</label>
                    <input type="text" name="name"/>
                </p>
                <p>
                    <label>Sobrenome:</label>
                    <input type="text" name="last_name"/>
                </p>
                <p>
                    <label>Número 1:</label>
                    <input type="number" name="n1"/>
                </p>
                <p>
                    <label>Número 2:</label>
                    <input type="number" name="n2"/>
                </p>
                <p>
                    <label>Operação:</label>
                    <select name="op">
                        <option value="+" >Soma</option>
                        <option value="-">Sub</option>
                        <option value="*">Mult</option>
                        <option value="/">Div</option>
                    </select>
                </p>
                <p>
                    <button type="submit">Calcular</button>
                </p>
            </form>
        </body>
    </html>
<?php } else if ($method == "POST") { ?>
    <?php
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];
    ?>
    <!doctype>
    <html>
        <head>
            <title>Calculadora V2</title>
            <meta charset="UTF-8" >
        </head>

        <body>
            <h1>Calculadora</h1>
            <form method="POST">
                <p>
                    <label>Nome:</label>
                    <input type="text" name="name" value="<?php echo $name; ?>"/>
                </p>
                <p>
                    <label>Sobrenome:</label>
                    <input type="text" name="last_name" value="<?php echo $last_name; ?>"/>
                </p>
                <p>
                    <label>Número 1:</label>
                    <input type="number" name="n1" value="<?php echo $n1; ?>"/>
                </p>
                <p>
                    <label>Número 2:</label>
                    <input type="number" name="n2" value="<?php echo $n2; ?>"/>
                </p>
                <p>
                    <label>Operação:</label>
                    <select name="op">
                        <option value="+" <?= $op == "+" ? "selected" : "" ?> >Soma</option>
                        <option value="-"
                            <?php
                            if ($op == "-") {
                                echo "selected";
                            }
                            ?>
                            >Sub</option>
                        <option 
                            value="*"
                            <?php
                            if ($op == "*") {
                                echo "selected";
                            }
                            ?>
                            >Mult</option>
                        <option 
                            value="/"
                            <?php
                            if ($op == "/") {
                                echo "selected";
                            }
                            ?>
                            >Div</option>
                    </select>
                </p>
                <p>
                    <button type="submit">Calcular</button>
                </p>
            </form>
            <p>
                <?php
                echo "$name $last_name, o resultado é: ";
                
                if ($op == "+") {
                    echo $n1 + $n2;
                } else if ($op == "-") {
                    echo $n1 - $n2;
                } else if ($op == "*") {
                    echo $n1 * $n2;
                } else if ($op == "/") {
                    echo $n1 / $n2;
                }
                ?>
            </p>
        </body>
    </html>
<?php } ?>

