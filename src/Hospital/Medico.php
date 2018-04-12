<?php

namespace POO\Hospital;

use POO\Hospital\Funcionario;

abstract class Medico extends Funcionario
{
    private $CRM;

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
}
