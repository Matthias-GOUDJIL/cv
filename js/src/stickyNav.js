$( document ).ready(function() {
  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      $('#arrow').addClass('show');
    } else {
      $('#arrow').removeClass('show');
    }
  });
  
  $('#arrow').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
});

  

