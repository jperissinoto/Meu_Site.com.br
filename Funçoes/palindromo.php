<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>digite uma palavra:</label>
        <p><input type="text" name="texto"></p>
        <br>
        <button type="submit">enviar</button>
</body>
</html>

<?php
$texto = $_POST['texto'] ?? '';
$texto_invertido = strrev($texto);
echo "seu texto invertido é: " . $texto_invertido . "<br>";
if ($texto === $texto_invertido) {
    echo "A palavra texto é uma palavra palíndromo.";
} else {
    echo "A palavra texto não é uma palavra palíndromo.";
}