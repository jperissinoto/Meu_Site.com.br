<?php

    $pessoa = ["nome" => "joão", "idade" => 30];
    echo "Meu nome é $pessoa[nome] e eu tenho $pessoa[idade] anos";
    
?>
<p> olá aqui é um HTML:</p>
<?php
    $aluno=["nome" => "joão", "idade" => 16, "nota"=> 100];
    echo"Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    $ano= 2025-$aluno["idade"];
    echo("<p>E você nasceu em" . $ano . ".</p>");
    $dataAtual = date("d/m/Y");
    $horaAtual= date("H:i:s");
    echo "hoje é $dataAtual e são $horaAtual";
    $dia = date('j');
    echo "<p> Hoje, $dia é dia nacional da Habitação </p>";
    $horas= date('H:i');
    echo "São exatamente $horas";
    
?>