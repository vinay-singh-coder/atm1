/* ------------------------------------------------------------------------------
*
*  # Template JS core
*
*  Core JS file with default functionality configuration
*
*  Version: 1.1
*  Latest update: Oct 20, 2015
*
* ---------------------------------------------------------------------------- */



$(function() {

    
    $("#home").click(function(){
        
        $("#home").addClass("active");
        $("#withdraw").removeClass("active");
        $("#transation").removeClass("active");
        
    });


    $("#withdraw").click(function(){
      
        
        $("#home").removeClass("active");
        $("#withdraw").addClass("active");
        $("#transation").removeClass("active");
        
    });

    

    $("#transation").click(function(){
    
        $("#home").removeClass("active");
        $("#withdraw").removeClass("active");
        $("#transation").addClass("active");
        
    });

  // Mobile sidebar controls
    // -------------------------

    // Toggle main sidebar
    $('.sidebar-mobile-main-toggle').on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('sidebar-mobile-main').removeClass('sidebar-mobile-secondary sidebar-mobile-opposite sidebar-mobile-detached');
    });
    $("#home").on("click",function(e){
        e.preventDefault();
        $("body").toggleClass('sidebar-mobile-main');
    });

    $("#about-me").on("click",function(e){
        e.preventDefault();
        $("body").toggleClass('sidebar-mobile-main');
    });

    $("#skills").on("click",function(e){
        e.preventDefault();
        $("body").toggleClass('sidebar-mobile-main');
    });

    $("#project").on("click",function(e){
        e.preventDefault();
        $("body").toggleClass('sidebar-mobile-main');
    });

    $("#academic-details").on("click",function(e){
        e.preventDefault();
        $("body").toggleClass('sidebar-mobile-main');
    });


   




    // Mobile sidebar setup
    // -------------------------

    $(window).on('resize', function() {
        setTimeout(function() {
            containerHeight();
            
            if($(window).width() <= 768) {

                // Add mini sidebar indicator
                $('body').addClass('sidebar-xs-indicator');

                // Place right sidebar before content
                $('.sidebar-opposite').insertBefore('.content-wrapper');

                // Place detached sidebar before content
                $('.sidebar-detached').insertBefore('.content-wrapper');
            }
            else {

                // Remove mini sidebar indicator
                $('body').removeClass('sidebar-xs-indicator');

                // Revert back right sidebar
                $('.sidebar-opposite').insertAfter('.content-wrapper');

                // Remove all mobile sidebar classes
                $('body').removeClass('sidebar-mobile-main sidebar-mobile-secondary sidebar-mobile-detached sidebar-mobile-opposite');

                // Revert left detached position
                if($('body').hasClass('has-detached-left')) {
                    $('.sidebar-detached').insertBefore('.container-detached');
                }

                // Revert right detached position
                else if($('body').hasClass('has-detached-right')) {
                    $('.sidebar-detached').insertAfter('.container-detached');
                }
            }
        }, 100);
    }).resize();


});
