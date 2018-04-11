<?php

namespace POO\Hospital;

use POO\Hospital\Funcionario;

class Gerente extends Funcionario
{
    private $CRA;

    public function getCRA(): string
    {
        return $this->CRA;
    }

    public function setCRA(string $CRA): void
    {
        $this->CRA = $CRA;
    }

    public function liberarPagamento(): void
    {
        // implementação
    }
}
