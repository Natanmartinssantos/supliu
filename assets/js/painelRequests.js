

 
$.get('../assets/PHP/returnList.php',{
    busca: "musicas"
  },function(data){
    
    $("#MusicList").html(data);
  });

$.get('../assets/PHP/returnList.php',{
    busca: "album"
  },function(data){
    
    $("#AlbumList").html(data);
  });

$.get('../assets/PHP/album_list_options.php',{
    busca: "album"
  },function(data){
    $("#album_options").html(data);
  });

  let actions = {
    insertAlbum(){
        let name_album = document.getElementById('name_album')
        let age = document.getElementById('age')

        $.post('../assets/PHP/insertalbum.php',{
            name_album :name_album.value,
            year: age.value
          },function(data){
            alert(data)
            setTimeout(() => {
                document.location.reload(true);
            }, 1000);
          });
    },
    insertFaixa(){
        let nome_faixa = document.getElementById('nome_faixa')
        let numero_faixa = document.getElementById('numero_faixa')
        let duracao_faixa = document.getElementById('duracao_faixa')
        let album_options = document.getElementById('album_options')

        $.post('../assets/PHP/insertMusic.php',{
            nome_faixa : nome_faixa.value,
            numero_faixa : numero_faixa.value,
            duracao_faixa : duracao_faixa.value,
            album_options : album_options.value

          },function(data){
            alert(data)
            setTimeout(() => {
                document.location.reload(true);
            }, 1000);
          });
    },
    excludeAlbum (id) {

        if(confirm("Excluir o album tambem excluirá suas musicas. Tem certeza que gostaria de Excluir o Album completo ?")){
            $.post('../assets/PHP/deleteItem.php',{
                table: "album",
                item:id
            },function(data){
                alert(data)
                setTimeout(() => {
                    document.location.reload(true);
                }, 1000)
            });
        }
    },
    excludeFaixa (id) {
        $.post('../assets/PHP/deleteItem.php',{
            table: "faixa",
            item:id
        },function(data){
            alert(data);
           setTimeout(() => {   
                document.location.reload(true);
           }, 1000);
        });
    },
  editAlbum (id) {
    $.get('../assets/PHP/returnModalForm.php',{
        table: "album",
        item:id
      },function(data){
        document.getElementById('updateAlbum').style.display = 'block';
        $("#updateAlbumForm").html(data);
      });
    },

  editFaixa (id) {
        $.get('../assets/PHP/returnModalForm.php',{
            table: "music",
            item:id
          },function(data){
            document.getElementById('updateMusic').style.display = 'block';
            $("#updateMusicForm").html(data);
          });

    }
  }


