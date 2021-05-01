<?php
include_once('conexao.php');
$table = $_GET['table'];
$item = $_GET['item'];
$oldDates = null;
if($table == 'music'){
    $sql = "SELECT faixa.id, faixa.numero, faixa.nome, faixa.duracao, faixa.album_id, album.nome_album FROM faixa JOIN album ON faixa.album_id = album.id WHERE faixa.id = '$item'";
    $result = $conn->query($sql);

    $sql2 = "SELECT * FROM album";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
 
        while($row = $result->fetch_assoc()) {
            echo '
                <input type="hidden" name="id" id="id_update" class="form-control" required value="'.$item.'">
                <label for="nome">Nome da musica : </label>
                <input type="text" name="nome_update" id="nome_faixa_update" class="form-control" required value="'.$row['nome'].'"><br>
        
                <label for="numero">Numero da faixa : </label>
                <input type="number" name="numero_update" id="numero_faixa_update" class="form-control" required value="'.$row['numero'].'"><br>
        
                <label for="duracao">Duração : </label>
                <input type="time" name="duracao_update" id="duracao_faixa_update" class="form-control" required value="'.$row['duracao'].'"><br>
        
                <label for="Album">Numero da faixa : </label>
                <select class="form-control" name="album_update" id="album_options_updateList">
                    <option style="color:blue, background:Red" value="'.$row['album_id'].'">'.$row['nome_album'].'</option>
            ';

            while($row2 = $result2->fetch_assoc()) {
                echo' <option style="color:blue, background:Red" value="'.$row2['id'].'">'.$row2['nome_album'].'</option>';
            }

            echo '
            </select><br>
            <button type="submit" class="btn btn-primary">Salvar</button>';
        }
    } else {
         echo "0 results";
    }
         $conn->close();
    }

    
if($table == 'album'){
    $sql = "SELECT * FROM album WHERE id='$item'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo '
            <input type="hidden" name="id_update" id="id" class="form-control" required value="'.$item.'"><br>
            <label for="name_album">Nome do album : </label>
                <input type="text" name="nome_album_update" id="name_album" class="form-control" required value="'.$row['nome_album'].'"><br>
            <label for="age">Ano de produção : </label>
                 <input type="number" name="age_update" id="age" class="form-control" required value="'.$row['year'].'"><br>
                 
            <button type="submit" class="btn btn-primary">Salvar</button';
        }
    } else {
         echo "0 results";
    }
         $conn->close();
}
