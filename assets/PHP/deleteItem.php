<?php
include_once('conexao.php');

$item = $_POST['item'];
$table = $_POST['table'];

if($table == 'faixa'){
    // sql to delete a record
    $sql = "DELETE FROM faixa WHERE id='$item'";

    if ($conn->query($sql) === TRUE) {
        echo "Music deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if($table == 'album'){
    // sql to delete a record
    $sql = "DELETE FROM album WHERE id='$item'";

    if ($conn->query($sql) === TRUE) {
         // sql to delete a record
            $sql = "DELETE FROM faixa WHERE id='$item'";

            if ($conn->query($sql) === TRUE) {
                echo "All deleted successfully";
            } else {
                echo "Error deleting record from Music: " . $conn->error;
            }
    } else {
        echo "Error deleting record From Album: " . $conn->error;
    }
}
