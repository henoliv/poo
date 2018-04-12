<?php

namespace POO\Hospital;

use POO\Hospital\Pessoa;
use DateTime;

abstract class Funcionario extends Pessoa
{
    private $dataAdmissao;
    private $matricula;

    public function getDataAdmissao(): DateTime
    {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao(DateTime $dataAdmissao): void
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }
}
