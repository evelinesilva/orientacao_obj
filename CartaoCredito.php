<?php

require 'lib/Carbon.php';
use Carbon\Carbon;

class CartaoDeCredito {
  public $numero;
  public $dataDeValidade;
}


$c = new CartaoDeCredito();
$c->numero = 111111;
$c->dataDeValidade =
  Carbon::createFromDate(2022,3, 7, 'America/Sao_Paulo');

echo "numero: $c->numero".PHP_EOL;
echo "Data De Validade: {$c->dataDeValidade->format ('d/m/Y')}".PHP_EOL;
