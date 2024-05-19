<?php

namespace Alura\DesignPattern\State\Descontos;

use Alura\DesignPattern\State\Orcamento;

class SemDesconto extends Desconto
{
  public function __construct() {
    parent::__construct(null);
  }

  public function calculaDesconto(Orcamento $orcamento): float
  {
    return 0;
  }
}
