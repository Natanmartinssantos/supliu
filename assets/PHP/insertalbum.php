<?php


    include_once('conexao.php');
    $nome_album = $_POST['name_album'];
    $year = $_POST['year'];

    $sql = "INSERT INTO album (nome_album, year)
    VALUES ('$nome_album', '$year')";

    if ($conn->query($sql) === TRUE) {
         echo "New Album created successfully";
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
   