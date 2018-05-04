<?php declare(strict_types=1);

namespace POO\Hospital;

use POO\Hospital\Funcionario;
use POO\Hospital\Endereco;

abstract class Medico extends Funcionario
{
    private $CRM;

    private $endereco;

    public function getCRM(): string
    {
        return $this->CRM;
    }

    public function setCRM(string $CRM): void
    {
        $this->CRM = $CRM;
    }

    abstract public function operar(): void;

    public function fazerAlgo(): void
    {
        // implementação
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco): void
    {
        $this->endereco = $endereco;
    }
}
