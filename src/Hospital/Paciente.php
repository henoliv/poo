<?php declare(strict_types=1);

namespace POO\Hospital;

use POO\Hospital\Pessoa;
use DateTime;

class Paciente extends Pessoa
{
    private $dataInternacao;

    public function getDataInternacao(): DateTime
    {
        return $this->dataInternacao;
    }

    public function setDataInternacao(DateTime $dataInternacao): void
    {
        $this->dataInternacao = $dataInternacao;
    }
}
