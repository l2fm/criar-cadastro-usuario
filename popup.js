//Carousel//
let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function changeSlide() {
    currentIndex = (currentIndex + 1) % totalItems; 
    const offset = -currentIndex * 100;

    document.querySelector('.carousel-imgs').style.transform = `translateX(${offset}%)`; // Corrigido aqui
}

setInterval(changeSlide, 3000); 

//fim carousel//

// popup login //
const openPopup = document.getElementById('btn-login');
const fundoPopup = document.getElementById('fundo-popup');

openPopup.addEventListener('click', () => {
    fundoPopup.classList.add('ativo');
});

fundoPopup.addEventListener('click', (event) => {
    if (event.target === fundoPopup) {
        fundoPopup.classList.remove('ativo');
    }
});

//fim popup login//

//Voltar ao inicio//
function voltarParaTelaInicial() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    setTimeout(function() {
        window.location.href = 'tela-projeto.html';
    }, 500);}
    //Fim do voltar ao inicio3//