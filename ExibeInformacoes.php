<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe Informações do Cliente</title>
  </head>
  <body>

    <?php
    require 'Cliente.php';  
    $cliente = new Cliente();
    $cliente->nome = $_POST['nome'];
    $cliente->email =$_POST['email'];
    ?>

    <h1>Clientes</h1>

    <h3>Nome: <?= $cliente->nome ?> </h3>

    <h3>Email: <?= $cliente->email ?> </h3>

  </body>
</html>
