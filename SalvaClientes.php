<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SalvaClientes</title>
  </head>
  <body>

    <h1>Cliente</h1>

    <?php

      require 'Cliente.php';

      $servername = "localhost";
      $username = "root";
      $password = "senha";
      $dbname = "Verao";

      //criando uma conexão
      $conn = new mysqli( $servername, $username, $password, $dbname );

      if ($conn->connect_error){
        die("Conexão falhou:" . $conn->connect_error);
      }
      echo "Conectado com sucesso".PHP_EOL;

      $cliente = new Cliente();
      $cliente->nome =$_POST['nome'];
      $cliente->email =$_POST['email'];

      $sql = "INSERT INTO clientes (nome, email) values ('$cliente->nome', '$cliente->email')";

      if ($conn->query($sql) === TRUE) {
        echo "Sucesso";
      } else {
        echo "Erro:". $sql . "<br>". $conn->error;
      }

      $conn->close();

     ?>
  </body>
</html>
