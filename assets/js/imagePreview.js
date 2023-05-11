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
                if (file.type == "image/png" || file.type == "image/jpeg" || file.type == "image/webp") {

                    console.log(file.type)
                    const readerTarget = e.target;

                    const img = document.createElement('img');
                    img.src = readerTarget.result;
                    img.classList.add('pictureImg');
                    
                    pictureImage.innerHTML = '';
                    pictureImage.appendChild(img);

                } else {
                    alert('=================== [ERRO] =================== \n Tipo de imagem inválido. \n Por favor insira um tipo válido');
                }
            });

            reader.readAsDataURL(file);
    } else {
        pictureImage.innerHTML = pictureImageTxt;
    }
});