<?php

include_once('conexao.php');

$nome_faixa = $_POST['nome_faixa'];
$numero_faixa = $_POST['numero_faixa'];
$duracao_faixa = $_POST['duracao_faixa'];
$album_options = $_POST['album_options'];

$sql = "INSERT INTO faixa (nome, numero, duracao, album_id)
VALUES (
    '$nome_faixa',
    '$numero_faixa',
    '$duracao_faixa',
    '$album_options'
)";

if ($conn->query($sql) === TRUE) {
  echo "New Music created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
