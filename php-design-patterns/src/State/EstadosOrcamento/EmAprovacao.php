<?php

namespace Alura\DesignPattern\State\EstadosOrcamento;

use Alura\DesignPattern\State\Orcamento;

class EmAprovacao
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.05;
  }

  public function aprova(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Aprovado();
  }
}