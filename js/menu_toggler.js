
    // Script to hide/show menu
    let button = document.querySelector('#menu_toggler');
    let   menu = document.querySelector('#menu_nav');

    button.addEventListener('click', function (e) {
        menu.classList.toggle('hide')
    });
