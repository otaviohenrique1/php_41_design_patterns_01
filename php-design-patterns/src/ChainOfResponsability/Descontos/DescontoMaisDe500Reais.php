<?php

namespace Alura\DesignPattern\ChainOfResponsability\Descontos;

use Alura\DesignPattern\ChainOfResponsability\Orcamento;

class DescontoMaisDe500Reais
{
  public function calculaDesconto(Orcamento $orcamento): float
  {
    if ($orcamento->valor > 500) {
      return $orcamento->valor * 0.05;
    }
    return 0;
  }
}
