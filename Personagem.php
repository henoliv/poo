<?php

namespace POO;

class Personagem
{
    private $nome;
    private $cor;
    private $quantidadeDeCogumelos;
    private $tipoFisico;
    private $possuiBigode;

    # Forçando tipos nos atributos no construtor
    public function __consruct(
        string $nome,
        string $cor,
        int $quantidadeDeCogumelos,
        float $altura,
        string $tipoFisico,
        bool $possuiBigode
    ) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->quantidadeDeCogumelos = $quantidadeDeCogumelos;
        $this->altura = $altura;
        $this->tipoFisico = $tipoFisico;
        $this->possuiBigode = $possuiBigode;
    }
}
