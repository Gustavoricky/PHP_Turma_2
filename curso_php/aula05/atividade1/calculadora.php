<!doctype>
<html>
    <head>
        <title>Calculadora</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="resultado.php">
            <p>
                <label>Nome:</label>
                <input type="text" name="name" />
            </p>
            <p>
                <label>Sobrenome:</label>
                <input type="text" name="last_name" />
            </p>
            <p>
                <label>Número 1:</label>
                <input type="number" name="n1" />
            </p>
            <p>
                <label>Número 2:</label>
                <input type="number" name="n2" />
            </p>
            <p>
                <label>Operação:</label>
                <input type="text" name="op" />
            </p>
            <p>
                <input type="submit" value="Calcular"/>
            </p>
        </form>
    </body>
</html>