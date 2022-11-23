window.onload = function () {
    /* burger */
    const burgerMenu = document.querySelector('.burger');
    const menuMobile = document.querySelector('.menu-mobile');
    const crossMenu = document.querySelector('#__cross');

    burgerMenu.addEventListener('click', () => showMenu(true));
    crossMenu.addEventListener('click', () => showMenu(false));

    function showMenu(status) {
        if (status) {
            menuMobile.classList.add('__active');
            return;
        }
        menuMobile.classList.remove('__active');
    }


    parallelogramAdaptive();

}

function parallelogramAdaptive() {
    //TODO:parallelogram width adaptive
    const parl = document.querySelector('.parallelogram');
    if (parl) {
        const width = parl.getBoundingClientRect().width;
        const height = parl.getBoundingClientRect().height;
        const img = parl.querySelector('img');
        img.style.width = width + 10 + 'px';
        img.style.left = ((height / width) * 10 + 1) * -1 + '%';
        const screenWidth = window.screen.width
        if (screenWidth < 769) {
            const titleHero = document.querySelector('.hero__title');
            titleHero.style.left = ((height / width) * 10 + 1) * -1 + '%';
        }
    }
}