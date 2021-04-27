
$(window).on('load', function() {

    $('.bgImageContainer').toggleClass('anim-enter', true);
    $('#rect').toggleClass('rectangle-anim', true);
    $('.label-header').toggleClass('label-header-anim', true);
    $('.label-desc').toggleClass('label-desc-anim', true);

});

if ($('.smart-scroll').length > 0) { // check if element exists
  var last_scroll_top = 0;
  $(window).on('scroll', function() {
    scroll_top = $(this).scrollTop();
    if(scroll_top < last_scroll_top) {
      $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
  }
  else {
      $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
  }
  last_scroll_top = scroll_top;
});
}

$(window).scroll(function() {
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});

$(document).ready(function() {

    $(".card").hover(function() {
        $(this).css({
            transform: 'scale(1.1)',
            opacity: '1.0'
        });
        $(".card").not(this).css({
            filter: 'blur(20px)',
            transform: 'scale(0.9)',
            opacity: '0.5'
        });
    }, function() {
        /* Stuff to do when the mouse leaves the element */
        $(".card").css({
            filter: 'blur(0px)',
            transform: 'scale(1.0)',
            opacity: '1.0'
        });
    });

    $("a").on('click', function(event) {


        if (this.hash !== "") {

          event.preventDefault();


          var hash = this.hash;


          $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){


            window.location.hash = hash;
        });
      }
  });


    



    var imageArray = ["slides_1", "slides_2", "slides_3", "slides_4"];

    var labelHeaderArray = [
    "Landscape & <br>Maintenance", 
    "Garden & <br>Nursery", 
    "5-in-1 Mix Soil <br>Manufacturer", 
    "Tree <br>Cutting Service"];

    var labelDescArray = [
    "A total care for your lawns and landscapes.",
    "Gardening essentials at a cheap price.",
    "Keep the crops safe & healthy.",
    "No tree is too tall."];

    var imageIndex = 0;
   

    // $('.prevBtn').on('click', function() {
    //     if (imageIndex == 0) {

    //         imageIndex = 3;
    //         onButtonClick(imageIndex);

    //     } else {

    //         imageIndex = imageIndex - 1;
    //         onButtonClick(imageIndex);
    //     }
    // });

    // $('.nextBtn').on('click', function() {
    //     if (imageIndex == 3) {

    //         imageIndex = 0;
    //         onButtonClick(imageIndex);

    //     } else {

    //         imageIndex = imageIndex + 1;
    //         onButtonClick(imageIndex);

    //     }
    // }); 


    window.onload = function() {
        onButtonClick(imageIndex);
    }
    function onButtonClick(slideCount){

        $('.bgImageContainer').toggleClass('anim-enter', false);
        $('#rect').toggleClass('rectangle-anim', false);
        $('.label-header').toggleClass('label-header-anim', false);
        $('.label-desc').toggleClass('label-desc-anim', false);

        $('.bgImageContainer').css('background-image', 'url(/nursery/images/' + imageArray[slideCount] + '.jpg)');
        



        setTimeout(
          function() 
          {


            $('.label-header').html(labelHeaderArray[slideCount]);
            $('.label-desc').text(labelDescArray[slideCount]);

            $('#rect').toggleClass('rectangle-anim', true);
            $('.label-header').toggleClass('label-header-anim', true);
            $('.label-desc').toggleClass('label-desc-anim', true);
        }, 500);

        setTimeout(
            function()
            {
                $('.bgImageContainer').toggleClass('anim-enter', true);
            }, 1500);


        $('.slidesCounterDynamic').animate({
            marginTop: "30px",
            opacity: "0.0"},
            1000, function() {
                /* stuff to do after animation is complete */
                $('.slidesCounterDynamic').css({
                    "margin-top": '0px'
                });
                $('.slidesCounterDynamic').text(slideCount + 1);
                $('.slidesCounterDynamic').animate({
                    opacity: "1.0"},
                    1000);
            });


        if (imageIndex == 3) {
            imageIndex = 0;
            setTimeout(function() {onButtonClick(imageIndex)}, 5000);
        } else {
            imageIndex++;
            setTimeout(function() {onButtonClick(imageIndex)}, 5000);
        }
        

    }


});



