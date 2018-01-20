<?php
class Conta {
  public $numero;
  public $saldo;
}

$x = new Conta();
$x->numero = 123;
$x->saldo = 1000;

echo "Saldo da conta X: $x->saldo".PHP_EOL;
echo "Número da conta X: $x->numero".PHP_EOL;
