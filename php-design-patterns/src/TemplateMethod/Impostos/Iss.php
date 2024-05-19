<?php

namespace Alura\DesignPattern\TemplateMethod\Impostos;

use Alura\DesignPattern\TemplateMethod\Orcamento;

class Iss implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}
