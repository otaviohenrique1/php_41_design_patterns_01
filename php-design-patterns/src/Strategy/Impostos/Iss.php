<?php

namespace Alura\DesignPattern\Strategy\Impostos;

use Alura\DesignPattern\Strategy\Orcamento;

class Iss implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}
