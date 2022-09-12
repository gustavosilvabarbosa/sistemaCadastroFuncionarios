<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulário </title>
</head>
<body>
    <h2> Cadastrar funcionários </h2>
    <form method="post" action="cad.php">
        <p>Id:<input type="text" name="id"></p>
        <p>Nome:<input type="text" name="nome"></p>
        <p> Cargo: <input type="text" name="cargo"></p>
        <p> Salário: <input type="number" name="sal"></p>
        <p> Qtd Dependentes: <input type="number" name="qtddep"></p>
        <p> <button type="submit"> Gravar dados </button></p>
    </form>
</body>
</html>