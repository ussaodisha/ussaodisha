$(document).ready(function () {
    
    // $('.head-navbar').on('click','li',function(){
    //     $('.head-navbar li.active').removeClass('active');
    //     $(this).addClass('active');
    // });

    $(document).on('click','.head-navbar .nav-item ',function(){
        $(this).addClass('active_nav').siblings().removeClass('active_nav');
    });


  });