<?php


file_put_contents("arquivo.json", json_encode($_POST));

header("Location: sucesso.php?name=$_POST[nome]");
