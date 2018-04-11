<?php

include_once('vendor/autoload.php');

use POO\Hospital\Pessoa;
use POO\Hospital\Paciente;
use POO\Hospital\Funcionario;
use POO\Hospital\Medico;
use POO\Hospital\Gerente;

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
