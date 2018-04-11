<?php

include_once('vendor/autoload.php');

// use POO\Personagem;
use POO\Hospital\Pessoa;
use POO\Hospital\Paciente;
use POO\Hospital\Funcionario;
use POO\Hospital\Medico;
use POO\Hospital\Gerente;

// Teste de identidade e igualdade
// $personagem = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);
// $personagem2 = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);
// var_dump($personagem->identical($personagem2));
// var_dump($personagem->equals($personagem2));

// Teste de representação
// $personagem = new Personagem('Mario', 'vermelho', 1, 1.6, 'gordo', true);

// var_dump($personagem->toString());

// Teste de atributos e métodos estáticos
// var_dump(Personagem::$quantidadeOlhos);
// var_dump(Personagem::andar());

// Testes com herança

$pessoa = new Pessoa();
$paciente = new Paciente();
$funcionario = new Funcionario();
$medico = new Medico();
$gerente = new Gerente();
var_dump($pessoa);
var_dump($paciente);
var_dump($funcionario);
var_dump($medico);
var_dump($gerente);
