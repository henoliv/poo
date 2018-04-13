<?php declare(strict_types=1);

namespace POO\Hospital;

use POO\Hospital\Pessoa;
use POO\Hospital\Funcionario;
use PHPUnit\Framework\TestCase;
use Error;

class MedicoTest extends TestCase
{
    public function testAbstracao(): void
    {
        $this->expectException(Error::class);
        $medico = new Medico();
    }
}
