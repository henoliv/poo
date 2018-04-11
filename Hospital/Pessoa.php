<?php

namespace POO\Hospital;

class Pessoa
{
    private $nome;
    private $sexo;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getSexo(): char
    {
        return $this->sexo;
    }

    public function setSexo(char $sexo): void
    {
        $this->sexo = $sexo;
    }
}
