$(document).ready(function () {
    
    // $(".nav-link").on("click", function(){  
    //     $(".navbar-nav").find(".active").removeClass("active");  
    //     $(this).parent().addClass("active");
    // });

    $('.navbar-nav .nav-link').click(function(){
        $('.navbar-nav .nav-link').removeClass('active');
        $(this).addClass('active');
    })

});