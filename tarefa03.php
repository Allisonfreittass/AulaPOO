<?php

class produto{
 public $descricao;
 public $estoque;
 public $preco;

 public function aumentarEstoque ($valor){
     $this->estoque += $valor;
 }

  public function diminuirEstoque ($valor){
      $this->estoque -= $valor;
  } 
 public function 
  reajustarPreco($percentual){
      $valoreajuste = ($percentual*$this->preco) / 100;
      $this->preco += $valorreajuste
  }
}

$celular = new produto;

$celular->descricao = "novo processador";
$celular->estoque = 1000;
$celular->preco = 1500;

echo "O $celular->decricao tem apenas $celular->estoque unidades em nossa loja, com o incrível valor $celular->preco!!";

$celular->aumentarEstoque(15);
$celular->diminuirEstoque(10);
$celular->reajustarPreco(50);

echo "O $celular->descricao tem estoque $celular->estoque com o preco unitário de R$ $P$celular->preco";