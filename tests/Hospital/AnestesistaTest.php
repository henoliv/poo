<?php declare(strict_types=1);

namespace POO\Hospital;

use POO\Hospital\Anestesista;
use POO\Hospital\Medico;
use POO\Hospital\Funcionario;
use POO\Hospital\Pessoa;
use PHPUnit\Framework\TestCase;
use Error;

class AnestesistaTest extends TestCase
{
    public function testAbstracao(): void
    {
        $anestesista = new Anestesista();
        $this->assertTrue($anestesista instanceof Anestesista);
        $this->assertTrue(is_subclass_of($anestesista, Medico::CLASS));
        $this->assertTrue(is_subclass_of($anestesista, Funcionario::CLASS));
        $this->assertTrue(is_subclass_of($anestesista, Pessoa::CLASS));
    }
}
