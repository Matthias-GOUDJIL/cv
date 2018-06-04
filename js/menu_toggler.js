
    // Script to hide/show menu
    let button = document.querySelector('#menu-toggler');
    let   menu = document.querySelector('.menu-nav');

    button.addEventListener('click', function (e) {
        menu.classList.toggle('hide')
    });
