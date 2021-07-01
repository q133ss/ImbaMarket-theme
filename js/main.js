$(".setup__input_option").click(function() {
    if ($(".setup__input_option").first().hasClass("setup__input_option_opened")) {
        $(".setup__input_option").first().removeClass("setup__input_option_opened")
        $(".setup__input_option").hide()
        $(".setup__input_option").first().show()
    } else {
        $(".setup__input_option").first().addClass("setup__input_option_opened")
        $(".setup__input_option").show()
    }
    console.log($(this))
})

console.log("qqq")

$('#newest-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('.content__items_parrow'),
    nextArrow: $('.content__items_narrow'),
    responsive: [
        {
          breakpoint: 1226,
          settings: {
            slidesToShow: 3
          }
        },
        {
        breakpoint: 1085,
        settings: {
            slidesToShow: 2
        }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }
      ]
  });

  $('#categories-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('.content__items_parrow2'),
    nextArrow: $('.content__items_narrow2'),
    responsive: [
        {
          breakpoint: 1226,
          settings: {
            slidesToShow: 3,
            centerPadding: '40px',
          }
        },
        {
          breakpoint: 1085,
          settings: {
            slidesToShow: 2
          }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }
      ]
  });


  //ajax add to cart
function add_to_cart(id){
    $( ".header__buy" ).load( "?add-to-cart="+id+" .header__buy" );

}

  //ajax load filters
$("#price-filter").change(function(){
    if($(this).val() == 0) return false;

    if($(this).val() == 'default'){
        $( ".content__items" ).load( "?orderby=menu_order .content__items" );
    }

    if($(this).val() == 'Low') {
        $(".content__items").load("?orderby=price .content__items");
    }
    if($(this).val() == 'Hieght') {
        $(".content__items").load("?orderby=price-desc .content__items");
    }
});

//Ajax delete
function delete_cart_item(url){
    $.get(url, function(data) {
        $('body').html(data);
    });
}