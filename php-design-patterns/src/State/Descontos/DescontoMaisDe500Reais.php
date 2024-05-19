<?php

namespace Alura\DesignPattern\State\Descontos;

use Alura\DesignPattern\State\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
  public function calculaDesconto(Orcamento $orcamento): float
  {
    if ($orcamento->valor > 500) {
      return $orcamento->valor * 0.05;
    }
    return $this->proximoDesconto->calculaDesconto($orcamento);
  }
}
