
    // Script to hide/show menu
    var toggler= document.querySelector('#menu_toggler');
    var menu = document.querySelector('#menu_nav');

    toggler.addEventListener('click', function (e) {
            menu.classList.toggle('hide')
    });
