jQuery(document).ready(function($){   
    $(function () {
            $(".blogBox .moreBox").slice(0, 4).show();
            $("body").on('click touchstart', '.row .load-more', function (e) {
                e.preventDefault();
                $(".blogBox .moreBox:hidden").slice(0, 2).slideDown();
                //  if ($(".blogBox .moreBox:hidden").length == 0) {
                //      $(".row .load-more").css('visibility', 'hidden');
                //  }
                //  $('html,body').animate({
                //      scrollTop: $(this).offset().top
                //  }, 1000);
            });

            $(".peopleBox .morePeople").slice(0, 8).show();
            $("body").on('click touchstart', '.row .load-more', function (e) {
                e.preventDefault();
                $(".peopleBox .morePeople:hidden").slice(0, 4).slideDown();
            //  if ($(".blogBox .moreBox:hidden").length == 0) {
            //      $(".row .load-more").css('visibility', 'hidden');
            //  }
                // $('html,body').animate({
                //     scrollTop: $(this).offset().top
                // }, 1000);
            });
            
            
        });   
    });
