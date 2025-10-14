<?php
require "funcoes.php";
    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];
    $a4=$_POST['a4'];
    $a5=$_POST['a5'];
    $media=media($a1,$a2,$a3,$a4,$a5);
    $soma=soma($a1,$a2,$a3,$a4,$a5);
    $maior=maior($a1,$a2,$a3,$a4,$a5);
    $menor=menor($a1,$a2,$a3,$a4,$a5);
    echo "O resultado da média é; $media <br>";
    echo "A soma de todos os números é: $soma <br>";
    echo "O maior número dessa lista de número é: $maior <br>";
    echo "O menor número dessa lista de número é: $menor";
    ?>