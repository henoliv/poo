<?php declare(strict_types=1);

namespace POO;

use POO\Personagem;
use PHPUnit\Framework\TestCase;

class PersonagemTest extends TestCase
{
    public function testIgualdade(): void
    {
        $personagem = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);
        $personagem2 = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);

        $this->assertTrue($personagem->equals($personagem2));
    }

    public function testIdentidade(): void
    {
        $personagem = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);
        $personagem2 = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);

        $this->assertFalse($personagem->identical($personagem2));
    }

    public function testRepresentacao(): void
    {
        $personagem = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);

        $this->assertEquals(
            "Nome do personagem: Mario",
            $personagem->toString()
        );
    }

    public function testAtributoEstatico(): void
    {
        $this->assertEquals(2, Personagem::$quantidadeOlhos);
    }

    public function testMetodoEstatico()
    {
        $this->assertEquals(null, Personagem::andar());
    }
}
