<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>Resultados do processamento</h1>
  </header>
    <main>
      <?php
      $n = $_GET ["nome"];
      $s = $_GET ["sobrenome"];
      echo "<p> é um prazer te conhecer, <strong>$n $s</strong>! Este é meu site;"
      ?>
      <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>