<?php

namespace Alura\DesignPattern\ChainOfResponsability;

use Alura\DesignPattern\ChainOfResponsability\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\ChainOfResponsability\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\ChainOfResponsability\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento): float
  {
    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMaisDe500Reais(
        new SemDesconto()
      )
    );

    return $cadeiaDeDescontos->calculaDesconto($orcamento);
  }
}
