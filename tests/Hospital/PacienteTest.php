<?php

namespace POO\Hospital;

use POO\Hospital\Paciente;
use POO\Hospital\Pessoa;
use PHPUnit\Framework\TestCase;
use Error;

class PacienteTest extends TestCase
{
    public function testAbstracao(): void
    {
        $paciente = new Paciente();
        $this->assertTrue($paciente instanceof Paciente);
        $this->assertTrue(is_subclass_of($paciente, Pessoa::CLASS));
    }
}
