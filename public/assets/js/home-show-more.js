$(".readmore-btn").on('click',function(){
    $(this).parent().toggleClass('showContent');

    // Shorthand if else statement
    var replaceText = $(this).parent().hasClass('showContent') ? "Show Less" : "Show More";
    $(this).text(replaceText);
});