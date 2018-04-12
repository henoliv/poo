<?php

namespace POO\Hospital;

use POO\Hospital\Gerente;
use POO\Hospital\Funcionario;
use POO\Hospital\Pessoa;
use PHPUnit\Framework\TestCase;
use Error;

class GerenteTest extends TestCase
{
    public function testAbstracao(): void
    {
        $gerente = new Gerente();
        $this->assertTrue($gerente instanceof Gerente);
        $this->assertTrue(is_subclass_of($gerente, Funcionario::CLASS));
        $this->assertTrue(is_subclass_of($gerente, Pessoa::CLASS));
    }
}
