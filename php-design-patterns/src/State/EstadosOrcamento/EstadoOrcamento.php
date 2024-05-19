<?php

namespace Alura\DesignPattern\State\EstadosOrcamento;

use Alura\DesignPattern\State\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
  /**
   * @throws DomainException
   */
  abstract public function calculaDescontoExtra(Orcamento $orcamento): float;
}