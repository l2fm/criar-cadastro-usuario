const voluntario = document.getElementById('popup_voluntario');
const verTodos_doadores = document.getElementById('popup_doadores');
const verTodos_voluntarios = document.getElementById('popup_voluntarios');
const verTodos_projetos = document.getElementById('popup_projetos');
const doacao = document.getElementById('popup_doacao');

function showDoacaoPopup() {
    doacao.showModal();
}

function closePopup() {
    doacao.close();
};
function showVoluntarioPopup() {
    voluntario.showModal();
}

function closePopup() {
    voluntario.close();
}


function handleButtonClick(event) {
    const buttonId = event.target.id;

    switch (buttonId) {
        case 'popup_voluntario':
            voluntario.showModal();

        case 'popup_doadores':
            verTodos_doadores.showModal();

        case 'popup_voluntarios':
            verTodos_voluntarios.showModal();

        case 'popup_projetos':
            verTodos_projetos.showModal();

        case 'popup_doacao':
            doacao.showDoacaoPopup();

    }
}