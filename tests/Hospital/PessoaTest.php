<?php

namespace POO\Hospital;

use POO\Hospital\Pessoa;
use PHPUnit\Framework\TestCase;
use Error;

class PersonagemTest extends TestCase
{
    public function testAbstracao(): void
    {
        $this->expectException(Error::class);
        $pessoa = new Pessoa();
    }
}
