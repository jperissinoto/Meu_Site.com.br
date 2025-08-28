<?php
//funcoes.php
function saudacao($nome) {
    return "Bem-Vindo, $nome! Sua participação foi confirmada!";
}
function banco_dados($db) {
    return "Seu banco, $db! foi conectado com sucesso!";
}
function fiap($aluno1,$aluno2,$aluno3){
    echo"<h3> Lista de alunos com observações:</h3>";
    echo "<ul>";
    echo "<li>$aluno1</li>";
    echo "<li>$aluno2</li>";
    echo "<li>$aluno3</li>";
    echo "</ul>";
} 
function nota($nota) {

    if ($nota >= 7) {
        echo "Aprovado com $nota.<br>";
    }
    if ($nota >= 5 && $nota < 7) {
        echo "Recuperação com $nota.<br>";
    } else {
        echo "Reprovado com $nota.<br>";
    }

}               