const inputFile = document.querySelector("#picture_input");
const pictureImage = document.querySelector('.picture_image');
const pictureImageTxt = "Escolha uma imagem";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener('change', function(e) {
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function(e) {

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
                    img.classList.add('pictureImg');
                    
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