(function ($,undefined){


            $('.faq_question').click(function(){
                $('.block').css('background','#f2f2f2');
                $('.dark-description').slideToggle(200)
                    .css('padding-top','15px');
                $('h3:after').css('content','f068')
            });

})(jQuery);