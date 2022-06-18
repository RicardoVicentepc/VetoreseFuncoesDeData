<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <center>
        <form method="post" action="./forms.php">
            <h1>Formulario</h1>
            <br>
            <label>Insira seu nome</label>
            <input type="text" name="name">
            <br><br>
            <label>Insira seu cpf</label>
            <input type="text" name="cpf"><br><!--Duvida no type, se é number ou text!-->
            <br><br>
            <label>Insira sua data de nascimento</label>
            <input type="text" name="nasc">
            <br><br>

            <input type="submit" value="Calcular">
        </form>
    </center>
</body>
</html>