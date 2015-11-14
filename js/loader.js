$(window).load(function () {
    // Animate loader off screen
//        $(".mywrapper").hide();
    $(".preloader").fadeOut("slow", function () {
        $(".mywrapper").show();
    });

});