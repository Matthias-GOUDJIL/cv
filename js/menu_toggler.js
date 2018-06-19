
    // Script to hide/show menu
    let toggler= document.querySelector('#menu_toggler');
    let   menu = document.querySelector('#menu_nav');

    toggler.addEventListener('click', function (e) {
            menu.classList.toggle('hide')
    });
