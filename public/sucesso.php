<?php
$nameTitle = $_Get["name"];
$data = json_decode(file_get_contents("arquivo.json"), true);

[
  "nome" => $name,
  "ano" => $date,
  "genero" => $type,
  "nota" => $note,
] = $data;


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
  <h1><?= $nameTitle ?></h1>

  <p>Ano de lançamento: <?= $date ?></p>
  <p>Gênero: <?= $type ?></p>
  <p>Nota: <?= $note ?></p>

  <p>Criado por <?= $name ?></p>

  <button>
    <a href="/"> Voltar <?= $name ?></a>
  </button>
</body>

</html>