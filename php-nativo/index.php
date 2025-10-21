<form method="POST">
    <label>Digite um numero:</label>
    <input type="number" name="n">
    <input type="submit" value="calcular">
</form>

<?php
if(isset($_POST['n'])){
    $n=$_POST['n'];
    echo "Potência (n^2): " .pow($n,2) . "<br>";
    echo "Raiz quadrada: " . sqrt($n) . "<br>";
    echo "Valor absoluto: " . abs($n) . "<br>";
}
?>