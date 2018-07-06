
    // Script to hide/show menu
    var toggler= document.querySelector('#menu_toggler');
    var menu = document.querySelector('#menu_nav');
    var menuNav = document.querySelector('.menu-nav');

    toggler.addEventListener('click', function (e) {
            menu.classList.toggle('hide')
    });


    $( document ).ready(function() {
       
          if ($(window).width() < 768) {
            $('#menu_nav').addClass('hide');
        }
      });
      