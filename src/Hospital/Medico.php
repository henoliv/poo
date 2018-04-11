<?php

namespace POO\Hospital;

use POO\Hospital\Funcionario;

class Medico extends Funcionario
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

    public function operar(): void
    {
        // implementação
    }
}
