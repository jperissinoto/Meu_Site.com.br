<?php
$vetor = [4,8,15,16,23,42];
$busca = 15;
$achou = false;
foreach ($vetor as $i =>$valor){
    if ($valor==$busca){
        echo "Número encontrado na posição $i"
        $achou=treu;
        break;
    }
}
if (!$achou) echo"Número não encontrado";
?>