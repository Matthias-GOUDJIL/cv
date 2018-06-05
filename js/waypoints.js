var left = $('.left');
var right = $('.right');
var brand_container = $('.brand-container');

left.waypoint(function (direction) {
    if (direction == 'down') {
        left.addClass('animated');
        left.addClass('fadeInLeft');
    }else{
        left.removeClass('animated');
        left.removeClass('fadeInLeft');
    }
},{offset:'50%'});

right.waypoint(function (direction) {
    if (direction == 'down') {
        right.addClass('animated');
        right.addClass('fadeInRight');
    } else {
        right.removeClass('animated');
        right.removeClass('fadeInRight');
    }
},{offset:'50%'});

brand_container.waypoint(function (direction) {
    if (direction == 'down') {
        brand_container.addClass('animated');
        brand_container.addClass('swing');
    } else {
        brand_container.removeClass('animated');
        brand_container.removeClass('swing');
    }
},{ offset: '100' });