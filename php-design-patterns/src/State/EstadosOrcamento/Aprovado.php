<?php

namespace Alura\DesignPattern\State\EstadosOrcamento;

use Alura\DesignPattern\State\Orcamento;

class Aprovado
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.02;
  }
}