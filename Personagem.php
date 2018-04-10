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
    public function __construct(
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

    public function __destruct()
    {
        // funções da destruição do objeto
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function setCor($cor): void
    {
        $this->cor = $cor;
    }

    public function getQuantidadeDeCogumelos(): int
    {
        return $this->quantidadeDeCogumelos;
    }

    public function setQuantidadeDeCogumelos($quantidadeDeCogumelos): void
    {
        $this->quantidadeDeCogumelos = $quantidadeDeCogumelos;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function getTipoFisico(): string
    {
        return $this->tipoFisico;
    }

    public function setTipoFisico($tipoFisico): void
    {
        $this->tipoFisico = $tipoFisico;
    }

    public function getPossuiBigode(): bool
    {
        return $this->possuiBigode;
    }

    public function setPossuiBigode($possuiBigode): void
    {
        $this->possuiBigode = $possuiBigode;
    }

    public function pular(): void
    {
        // implementação
    }

    public function pegarCogumelo(Cogumelo $cogumelo): void
    {
        // implementação
    }

    public function atirarFogo(): BolaFogo
    {
        // implementação
    }
}
