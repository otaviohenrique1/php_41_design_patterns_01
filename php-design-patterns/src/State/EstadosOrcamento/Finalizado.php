<?php

namespace Alura\DesignPattern\State\EstadosOrcamento;

use Alura\DesignPattern\State\Orcamento;
use DomainException;

class Finalizado
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}