<?php

namespace Alura\DesignPattern\TemplateMethod\Impostos;

use Alura\DesignPattern\TemplateMethod\Orcamento;

interface Imposto {
  public function calculaImposto(Orcamento $orcamento): float;
}
