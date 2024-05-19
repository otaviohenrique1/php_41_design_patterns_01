<?php

namespace Alura\DesignPattern\TemplateMethod\Impostos;

use Alura\DesignPattern\TemplateMethod\Orcamento;

class Icms implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.1;
  }
}
