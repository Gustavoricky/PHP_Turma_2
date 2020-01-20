<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Tarefas</title>
    </head>
    <body>
        <h1>Lista de tarefas</h1>
        <form action="dados.php">
            <p>
                <label>Nome:</label>
                <input type="text" name="name" />
            </p>
            <p>
                <label>Sobrenome:</label>
                <input type="text" name="last_name" />
            </p>
            <p>
                <label>E-mail:</label>
                <input type="email" name="email" />
            </p>
            <p>
                <label>Senha:</label>
                <input type="password" name="password" />
            </p>
            
            <input type="submit" value="Entrar" />
        </form>
    </body>
</html>
