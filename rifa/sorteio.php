<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio da Rifa</title>
    <link rel="stylesheet" href="sorteio.css">
</head>
<body>
    <haeder>
         <h1>Sorteio da Rifa</h1>

        <form method ="POST">
            <label for="premio">Nome do Prêmio:</label>
            <input type="text" id="text" name="premio" required>
            <label for="numero-inicial">Número Inicial:</label>
            <input type="text" id="text" name="numero-inicial" required>
            <label for="numero_final">Número Final:</label>
            <input type="text" id="text" name="numero_final" required>
            <button type="submit">Sortear</button>
        </form>

    <?php
        // Configura o fuso horário
        date_default_timezone_set('America/Sao_Paulo');

        // Caminho do arquivo de ganhadores
        $arquivo = "ganhadores.txt";

        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['premio']) && !empty($_POST['numero-inicial']) && !empty($_POST['numero_final'])) {

            // Gera o número aleatório
            $numero_final=$_POST['numero_final'];
            $numero_inicial=$_POST['numero-inicial'];
            if ($numero_inicial < $numero_final) {
                $numero_sorteado = rand($numero_inicial,$numero_final);
                // Exibe o número sorteado
                echo "<div class='resultado'>Número sorteado: <strong>$numero_sorteado</strong></div>";
                echo "<br>";

                // Exibe data e hora formatadas
                $data_atual = date('d/m/Y');
                $hora_atual = date('H:i:s');
                $data_futura = date('d/m/Y', strtotime('+7 days'));

                echo "<div class='info'>";
                echo "📅 Data atual: <strong>$data_atual</strong><br>";
                echo "⏰ Hora atual: <strong>$hora_atual</strong><br>";
                echo "📆 Daqui a 7 dias: <strong>$data_futura</strong>";
                echo "</div>";

                // Pega o nome do prêmio
                $premio = htmlspecialchars($_POST['premio']);

                // Monta a linha para salvar
                $linha = "$premio - Rifa nº $numero_sorteado - " . date("d/m/Y H:i:s") . "\n";

                file_put_contents($arquivo, $linha, FILE_APPEND);

                echo "<h2>🎉 Ganhadores</h2>";

                // Exibe a lista de ganhadores
                if (file_exists($arquivo)) {
                    $ganhadores = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    echo "<ul>";
                    foreach ($ganhadores as $g) {
                        echo "<li>$g</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Ainda não há ganhadores registrados.</p>";
                }

                echo '<button onclick="location.reload()">Sortear Novo Número</button>';
            }
        }
    ?>
</body>
</html>