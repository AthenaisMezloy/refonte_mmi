$(window).on("scroll",function() {
    if ($(window).scrollTop() == 0) {
        console.log("test")
        $("nav").removeClass("bg-cream");
    } else {
        $("nav").addClass("bg-cream");
    }
})