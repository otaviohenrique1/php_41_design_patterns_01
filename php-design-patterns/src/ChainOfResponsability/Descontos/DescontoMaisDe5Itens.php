<?php

namespace Alura\DesignPattern\ChainOfResponsability\Descontos;

use Alura\DesignPattern\ChainOfResponsability\Orcamento;

class DescontoMaisDe5Itens
{
  public function calculaDesconto(Orcamento $orcamento): float
  {
    if ($orcamento->quantidadeItens > 5) {
      return $orcamento->valor * 0.1;
    }
    return 0;
  }
}
