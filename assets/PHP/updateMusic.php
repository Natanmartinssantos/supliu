<?php 
include_once('conexao.php');


$id_update = $_POST['id'];
$nome_update = $_POST['nome_update'];
$numero_update = $_POST['numero_update'];
$duracao_update = $_POST['duracao_update'];
$album_update = $_POST['album_update'];

$sql = "UPDATE faixa SET
    nome = '$nome_update',
    numero = '$numero_update',
    duracao = '$duracao_update',
    album_id = '$album_update'
 WHERE id='$id_update'";

if ($conn->query($sql) === TRUE) {
  header('location: ../../painel/index.html');
} else {
  echo "Error updating record: " . $conn->error;
  header('location: ../../painel/pageErrorUpdate.html');
}

$conn->close();