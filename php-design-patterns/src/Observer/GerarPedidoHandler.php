<?php

namespace Alura\DesignPattern\Observer;

use Alura\DesignPattern\Observer\AcoesAoGerarPerdido\CriarPedidoNoBanco;
use Alura\DesignPattern\Observer\AcoesAoGerarPerdido\EnviarPedidoPorEmail;
use Alura\DesignPattern\Observer\AcoesAoGerarPerdido\LogGerarPedido;
use DateTimeImmutable;

/* CommandHandler */
class GerarPedidoHandler
{
  /** @var AcaoAposGerarPedido[] */
  private array $acoesAposGerarPedido = [];

  public function __construct()
  {
  }

  public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
  {
    $this->acoesAposGerarPedido[] = $acao;
  }

  public function execute(GerarPedido $gerarPedido)
  {
    $orcamento = new Orcamento();
    $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
    $orcamento->valor = $gerarPedido->getValorOrcamento();

    $pedido = new Pedido();
    $pedido->dataFinalizacao = new DateTimeImmutable();
    $pedido->nomeCliente = $gerarPedido->getNomeCliente();
    $pedido->orcamento = $orcamento;

    foreach ($this->acoesAposGerarPedido as $acao) {
      $acao->executaAcao($pedido);
    }
  }
}
