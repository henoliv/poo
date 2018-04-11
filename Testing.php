<?php

namespace POO;

// remover quando implementar autoload
include('Personagem.php');

class Testing
{
    public function testIdentity()
    {
        return new Personagem(1, 1, 1, 1, 1, 1) === new Personagem(1, 1, 1, 1, 1, 1);
    }

    public function testEquality()
    {
        return new Personagem(1, 1, 1, 1, 1, 1) == new Personagem(1, 1, 1, 1, 1, 1);
    }
}


// Teste de identidade e igualdade
/*$test = new Testing();

var_dump([$test->testIdentity(), $test->testEquality()]);*/

// Teste de representação
/*$personagem = new \POO\Personagem('Mario', 'vermelho', 1, 1.30, 'gordo', true);

var_dump($personagem->toString());*/

// Teste de atributos e métodos estáticos
var_dump(Personagem::$quantidadeOlhos);
var_dump(Personagem::andar());
