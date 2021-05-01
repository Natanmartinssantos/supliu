<?php

include_once('conexao.php');


$sql = "SELECT * FROM album";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
      echo'
        <option value="'.$row['id'].'">'.$row['nome_album'].'</option>
      ';
    }
 
} else {
  echo "0 results";
}
$conn->close();