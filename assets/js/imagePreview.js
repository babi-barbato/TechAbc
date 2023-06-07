const inputFile = document.querySelector("#picture_input"); //input/label que esta na  caixinha de adicionar imagem
const pictureImage = document.querySelector('.picture_image'); //selecionar a imagem na pasta
const pictureImageTxt = "Escolha uma imagem"; //texto que aparece dentro da caixinha da imagem quando ela esta vazia 
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener('change', function(e) {
    const inputTarget = e.target;//o target serve çara motsrar quem rá sofrer a ação, neste caso o input esta recebendo o target, sendo assim, o input sera o alvo 
    const file = inputTarget.files[0];//recebe o primeiro arquivo selecionado 

    if (file) {
            const reader = new FileReader();//responsavel por ler o arquivo

            reader.addEventListener('load', function(e) { //quando recebr algum arquivo que precisa ser lido

                // Verifica se as extensões são algumas das três permitidas
                if (file.type == "image/png" || file.type == "image/jpeg" || file.type == "image/webp") {

                    // imprime no console a extensão do arquivo selecionado
                    console.log(file.type)

                    // Recebe o target do evento, que é o próprio input file
                    const readerTarget = e.target;
                    
                    // cria o elemento HTML img
                    const img = document.createElement('img');
                    // define o src da img para o result obtido do upload
                    img.src = readerTarget.result;
                    // adiciona classe "pictureImg" no elemento, para que receba a devida estilização
                    img.classList.add('pictureImg');//chama a classe de limitação de tamanho
                    
                    // a label relativa ao input file não recebe texto
                    pictureImage.innerHTML = '';
                    // a label relativa ao input file recebe a img criada
                    pictureImage.appendChild(img);

                } else {
                    alert('=================== [ERRO] =================== \n Tipo de imagem inválido. \n Por favor insira um tipo válido');
                }
            });

            // o reader deve ler os dados do objeto file como url
            reader.readAsDataURL(file);
    } else {
        // Caso não seja feito nenhum upload, a label recebe o texto "Escolha uma imagem"
        pictureImage.innerHTML = pictureImageTxt;
    }
});