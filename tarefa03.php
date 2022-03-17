<?php

class produto{

 public $descricao;
 public $estoque;
 public $preco;

 public function aumentarEstoque ($valor) {
     $this->estoque += $valor;
 }

  public function diminuirEstoque ($valor){
      $this->estoque -= $valor;
  } 

 public function reajustarPreco($percentual){
    $this->preco += ($percentual*$this->preco)/100;
  }
}

$celular = new produto;

$celular->descricao = "novo processador";
$celular->estoque = 1000;
$celular->preco = 1500;

echo 'O estoque de '. $celular->descricao. ' é '. $celular->estoque. '<br>';
echo 'O preço de '.  $celular->descricao. ' é '. $celular->preco;
echo '<br>';

$celular->aumentarEstoque(10);
$celular->diminuirEstoque(5);
$celular->reajustarPreco(50);

echo 'o estoque de '. $celular->descricao . ' é '. $celular->estoque. '<br>';
echo 'O preço de '. $celular->descricao . ' é '. $celular->preco;
