<?php

namespace Alura\DesignPattern\State\EstadosOrcamento;

use Alura\DesignPattern\State\Orcamento;
use DomainException;

class Reprovado
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento reprovado não pode receber desconto');
  }
}