<?php

namespace Alura\DesignPattern\ChainOfResponsability\Descontos;

use Alura\DesignPattern\ChainOfResponsability\Orcamento;

abstract class Desconto
{
  protected ?Desconto $proximoDesconto;

  public function __construct(?Desconto $proximoDesconto)
  {
    $this->proximoDesconto = $proximoDesconto;
  }

  abstract public function calculaDesconto(Orcamento $orcamento): float;
}
