const modoBtn = document.getElementById('modoBtn');
const body = document.body;

modoBtn.addEventListener('click', () => {
    body.classList.toggle('modo-claro');
});