<?php 
include_once('conexao.php');

$id_update = $_POST['id_update'];
$nome_album_update = $_POST['nome_album_update'];
$age_update = $_POST['age_update'];

$sql = "UPDATE album SET
    nome_album = '$nome_album_update',
    year = '$age_update'
 WHERE id ='$id_update'";

if ($conn->query($sql) === TRUE) {
  header('location: ../../painel/index.html');
} else {
  echo "Error updating record: " . $conn->error;
  header('location: ../../painel/pageErrorUpdate.html');
}
$conn->close();