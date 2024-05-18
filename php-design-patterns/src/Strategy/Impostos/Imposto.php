<?php

namespace Alura\DesignPattern\Strategy\Impostos;

use Alura\DesignPattern\Strategy\Orcamento;

interface Imposto {
  public function calculaImposto(Orcamento $orcamento): float;
}
