<?php declare(strict_types=1);

namespace POO\Hospital;

use POO\Hospital\Pessoa;
use PHPUnit\Framework\TestCase;
use Error;

class PessoaTest extends TestCase
{
    public function testAbstracao(): void
    {
        $this->expectException(Error::class);
        $pessoa = new Pessoa();
    }
}
