<?php
   include_once('conexao.php');

   
    $chave = $_GET['chave'];
    $sql = "SELECT faixa.nome, faixa.numero, faixa.duracao, album.nome_album, album.year
    FROM faixa
     JOIN album ON faixa.album_id = album.id 
     WHERE faixa.nome LIKE '%$chave%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $list = [];
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($list, $row);
    }
      echo json_encode($list);
    } else {
      echo "0 results";
    }
    $conn->close();
  