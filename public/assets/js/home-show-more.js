// $(".content-area-text").slideUp();
$(".readmore-btn").on('click',function(){
    $(this).parent().toggleClass('showContent');
    // $(this).parent().children(".content-area-text").slideToggle();

    // Shorthand if else statement
    var replaceText = $(this).parent().hasClass('showContent') ? "Show Less" : "Show More";
    $(this).text(replaceText);
});