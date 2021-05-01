let input = document.getElementById('inputSearch')
let btn = document.getElementById('btnSearch')

let localFaixas = document.getElementById('faixas');
btn.addEventListener('click', () => {
    $.get('./assets/PHP/search.php',{
        chave: input.value
    },function(data){
        let alb = null
        let dates =  JSON.parse(data);
        let trEqualAlbum = '';
        let albumEqual = null;

        alb = dates[0].nome_album
        let preparingEqualsAlbuns = (item) =>{
            if(item.nome_album == alb){
                 trEqualAlbum += `
                <tr>
                    <td> ${item.numero}</td>
                    <td> ${item.nome}</td>
                    <td> ${item.duracao}</td>
                </tr>`;
                albumEqual = `<p> <strong>${alb}</strong></p>`
            }
           }
           let listEquals = dates.filter(preparingEqualsAlbuns);
           console.log(listEquals);
           
           localFaixas.innerHTML = albumEqual + trEqualAlbum;
           
      });
});