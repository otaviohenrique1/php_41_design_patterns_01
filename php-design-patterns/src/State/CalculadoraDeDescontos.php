<?php

namespace Alura\DesignPattern\State;

use Alura\DesignPattern\State\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\State\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\State\Descontos\SemDesconto;

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
