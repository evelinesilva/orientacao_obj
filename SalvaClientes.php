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

      $cliente = new Cliente();

      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

      //criando uma conexão
      $conn = new mysqli( $servername, $username, $password, $dbname );

      if ($conn->connect_error){
        die("Conexão falhou:" . $conn->connect_error);
      }
      echo "Conectado com sucesso".PHP_EOL;

      //$comando = $conn->prepare($sql);
      $stmt = $conn->prepare("INSERT INTO clientes (nome, email) values (?, ?)");
      $stmt->bind_param("ss", $cliente->nome, $cliente->email);


      $stmt->execute();

      // if ($conn->query($sql) === TRUE) {
      //   echo "Sucesso";
      // } else {
      //   echo "Erro:". $sql . "<br>". $conn->error;
      // }
      $stmt->close();
      $conn->close();

     ?>
  </body>
</html>
