const imagens = ['coração.svg', 'coraçãoVermelho.svg'];

document.querySelectorAll('.galeria').forEach(galeria => {
  const imgElement = galeria.querySelector('.like');
    const spanElement = galeria.querySelector('.btn-hearth');
    let clicado = false; // Controla o estado da imagem

    imgElement.addEventListener('click', function() {
        if (!clicado) {
            imgElement.src = 'coraçãoVermelho.svg';
            spanElement.textContent = parseInt(spanElement.textContent) + 1;
            clicado = true;
        } else {
            imgElement.src = 'coração.svg';
            spanElement.textContent = parseInt(spanElement.textContent) - 1;
            clicado = false;
        }
    });
});