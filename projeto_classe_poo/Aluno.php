<?php
require_once 'Usuario.php';
// Classe Filha - Professor
class Aluno extends Usuario {
    private $Matricula;

    public function __construct($nome, $email, $Matricula) {
        parent::__construct($nome, $email);
        $this->Matricula = $Matricula;
    }

    public function getMatricula() {
        return $this->Matricula;
    }

    public function exibirInfo() {
        return parent::exibirInfo() . " | Matricula: {$this->Matricula}";
    }

    public function estudar() {
        return "{$this->nome} está estudando...";
    }
}