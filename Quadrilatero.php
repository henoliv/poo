<?php

namespace POO;

class Quadrilatero
{
    // área do quadrado
    public function calcularArea(float $lado): float
    {
        return $lado * $lado;
    }

    // área do retângulo
    public function calcularArea(float $base, float $altura): float
    {
        return $base * $altura;
    }

    // área do trapézio
    public function calcularArea(float $baseMaior, float $baseMenor, float $altura): float
    {
        return (($baseMaior * $baseMenor) * $altura)/2;
    }
    
    // área do losango
    public function calcularArea(float $diagonalMaior, float $diagonalMenor): float
    {
        return $diagonalMaior * $diagonalMenor;
    }
}
