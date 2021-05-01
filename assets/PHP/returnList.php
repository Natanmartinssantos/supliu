<?php
   include_once('conexao.php');
    $busca = $_GET['busca'];
    if($busca == 'album'){
        $sql = "SELECT * FROM album";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo'
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['nome_album'].'</td>
                    <td>'.$row['year'].'</td>
                    <td> 
                        <div class="btn btn-sm btn-danger" onclick="actions.excludeAlbum('.$row['id'].')">Exclude</div>
                        <div  class="btn btn-sm btn-warning" onclick="actions.editAlbum('.$row['id'].')">Edit</div>
                    </td>
                </tr>
              ';
            }
         
        } else {
          echo "0 results";
        }
        $conn->close();


    }else{
        $sql = "SELECT faixa.id, faixa.numero, faixa.nome, faixa.duracao, faixa.album_id, album.nome_album FROM faixa JOIN album ON faixa.album_id = album.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
              echo'
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>#'.$row['numero'].'</td>
                    <td>'.$row['nome'].'</td>
                    <td>'.$row['duracao'].'</td>
                    <td>'.$row['nome_album'].'</td>
                    <td> 
                        <div class="btn btn-sm btn-danger" onclick="actions.excludeFaixa('.$row['id'].')">Excluir</div>
                        <div class="btn btn-sm btn-warning" onclick="actions.editFaixa('.$row['id'].')">Editar</div>
                    </td>
                </tr>
              ';
            }
         
        } else {
          echo "0 results";
        }
        $conn->close();

    }
  