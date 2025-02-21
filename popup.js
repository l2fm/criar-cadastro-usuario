// Carrossel
let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function changeSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    const offset = -currentIndex * 100;
    document.querySelector('.carousel-imgs').style.transform = `translateX(${offset}%)`;
}

setInterval(changeSlide, 3000);

// Popup de Login
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

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && fundoPopup.classList.contains('ativo')) {
        fundoPopup.classList.remove('ativo');
    }
});

const btnMaisTarde = document.querySelector('.btn-maistarde');
btnMaisTarde.addEventListener('click', () => {
    fundoPopup.classList.remove('ativo');
});

// Voltar ao Topo
function voltarParaTelaInicial() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}