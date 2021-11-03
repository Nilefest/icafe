// --Клик по label работает при любом положении родительского input'а
var labelID;
$('label').click(function() {
  labelID = $(this).attr('for');
  $(labelID).trigger('click');
});
// --Конец кода

$('.menu-slider__items').slick({
      infinite: true,
      dots: false,
      slidesToShow: 6,
      slidesToScroll: 2,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,

      responsive: [
      {
        breakpoint: 910,
        settings: {
          slidesToShow: 5,
        }
      },
      {
        breakpoint: 765,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          centerMode: false,
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
    });



 $('.multiple-items').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 576,
        settings: {
          fade: false,
          slidesToShow: 1,
        }
      }
    ]
});


$(document).ready(function() {
  $('.num_to_order').click(function () {
    $(this).addClass('d-none');
    $(this).parents('.dish__footer').find('.count-dishes').removeClass('d-none');

  });
});


$(document).ready(function() {
  $('.num-in span').click(function () {
      var $input = $(this).parents('.count-dishes').find('input.in-num');
    if($(this).hasClass('minus')) {
      var count = parseFloat($input.val()) - 1;
      count = count < 0 ? 0 : count;
      if (count < 1) {
        $(this).addClass('dis');
        $(this).parents('.count-dishes').addClass('d-none');

        $(this).parents('.dish__footer').find(('.num_to_order')).removeClass('d-none');
      }
      else {
        $(this).removeClass('dis');
      }
      $input.val(count);
    }
    else {
      var count = parseFloat($input.val()) + 1
      $input.val(count);
      if (count > 0) {
        $(this).parents('.count-dishes').find(('.minus')).removeClass('dis');
      }
    }
    
    $input.change();
    return false;
  });
  
});
// ---------------product +/- ------------//