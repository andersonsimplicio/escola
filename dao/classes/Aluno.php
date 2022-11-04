<?php

class Aluno {
    private $name;
    private $email;
    private $cidade;
    private $genero;
    private $telefone;

    public function __construct($nome,$email,$telefone,$cidade,$genero){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cidade = $cidade;
        $this->genero = $genero;
    }
    
    public function getNome(){
        return $this->nome;
    }

}

?>