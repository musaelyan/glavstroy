'use strict';

$(function(){
  $('.js-number').on('click', function(e) {
    e.preventDefault();
    var type = $(this).data('type');
    var field = $(this).parents('.js-number-wrapper').find('input');
    var rezult;
    if (type === 0) {
      rezult = +field.val() - 1;
      if (rezult < 0) {
        rezult = 0;
      }
    } else if ( type === 1) {
      rezult = +field.val() + 1;
    }
    field.val(rezult);
  });
})
