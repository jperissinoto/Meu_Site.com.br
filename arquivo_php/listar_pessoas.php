<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listar_pessoas.php" method="post">
        <label>Nome do aluno:</label>
        <input type="text" name="cliente" required>
        <input type="submit" value="Atender">

    </form>
    <h3>Lista de atendimento</h3>
    <?php
    $nome_atendimento = $_POST['cliente']??'';
        $arquivo = fopen("atendimento.txt", "a");
    fwrite($arquivo, "$nome_atendimento\n");
    fclose($arquivo);
    ?>
</body>
</html>