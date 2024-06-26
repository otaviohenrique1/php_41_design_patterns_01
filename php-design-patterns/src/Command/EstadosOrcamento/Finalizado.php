<?php

namespace Alura\DesignPattern\Command\EstadosOrcamento;

use Alura\DesignPattern\Command\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}