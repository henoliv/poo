<?php

namespace POO;

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

$test = new Testing();

var_dump([$test->testIdentity(), $test->testEquality()]);
