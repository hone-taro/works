$(function () {
  console.log('test');

  $('.event-list').hover(
    function () {
      $(this).css({
        'border-bottom': 'none',
        'margin-bottom': '1px'
      });
      $(this).find('.event-name').fadeIn(500);
    },
    function () {
      $(this).css({
        'border-bottom': 'solid 1px #e7e9e9',
        'margin-bottom': '0px'
      });
      $(this).find('.event-name').fadeOut(500);
    });

  $('.menu-humberger').on('click',function() {
    $(this).toggleClass('active');
    if($('.menu-humberger').hasClass('active')) {
      $('.m-header-nav-lists').slideDown();
    } else {
      $('.m-header-nav-lists').slideUp();
    }
    

  });

});