<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio da Rifa</title>
    <link rel="stylesheet" href="sorteio.css">
    
</head>
<body>
    <h1>Sorteio da Rifa</h1>

    <?php
        // Gera um número aleatório entre 1 e 1000
        $numero_sorteado = rand(1, 1000);
        echo "<div class='resultado'>O número sorteado é: <strong>$numero_sorteado</strong></div>";
    ?>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    echo "Data atual:  " . date('d/m/Y') . "<br>";
    echo "Hora atual: " . date('H:i:s') . "<br>";
    echo "Daqui a 7 dias: " . date('d/m/Y', strtotime('+7 days'));
?>

    <button onclick="location.reload();">Sortear Novo Número</button>
</body>
</html>