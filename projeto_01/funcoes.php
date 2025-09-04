<?php
    function conecta($usuario, $senha){
    if ($usuario == "admin" && $senha == "1234"){
        header("location: painel.php");
        exit;
    } else {
        // Codifica a mensagem para evitar problemas com acentuação
        $msg = urlencode("Usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }

}
function nota($nota, $Materia){
    if ($nota >= 7) {
        return "Voce foi Aprovado na Materia: $Materia";
    } elseif ($nota >= 5) {
        return "Voce ficou de Recuperação na Materia: $Materia";
    } else {
        return "Voce foi Reprovado na Materia: $Materia";
    }
}
?>
