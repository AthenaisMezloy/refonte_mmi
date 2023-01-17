var path = window.location.pathname;
var page = path.split("/").pop();

// Dark mode
    if(localStorage.getItem('dark')) {
        $("body").addClass("dark");
        $(".day").css("display","none");
        $(".night").css("display","flex");
    } else {
        $(".night").css("display","none");
        $(".day").css("display","flex");
    }

  $( "#btn-theme" ).on("click", function() { 
              if( $( "body" ).hasClass( "dark" )) { 
                  $( "body" ).removeClass( "dark" ); 
                  $(".night").css("display","none");
                  $(".day").css("display","flex");
                  localStorage.removeItem('dark',this.clicked);
              } else { 
                  $( "body" ).addClass( "dark" ); 
                  $(".day").css("display","none");
                  $(".night").css("display","flex");
                  localStorage.setItem('dark',this.clicked);
              } 
          }); 
          

//
// Nav 

if (page == "index.php") {

    document.getElementById("scroll-button").addEventListener("click", function() {
        window.scroll({
          top: 560, 
          left: 0, 
          behavior: 'smooth' 
        });
      });

    if ($(window).scrollTop() <= 1) {
        if (localStorage.getItem('dark')) {
            $("#btn-theme").css("background-color","white");
        }
      }

    $("#btn-theme").css("background","white");

    $(window).on("scroll",function() {
        if ($(window).scrollTop() <= 1) {
            console.log("test")
            if (localStorage.getItem('dark')) {
                $("#btn-theme").css("background-color","white");
            }
            $("nav").removeClass("bg-cream");
        } else {
            $("#btn-theme").css("background","none");
            $("nav").addClass("bg-cream");

        }
    })
    } else {
        $("nav").addClass("bg-cream");
        $("#btn-theme").css("background","none");
};

//
// filtre projets

if (page == "project.php") {
    $('.filter-button').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        var articles = $('.article-box');
        articles.each(function() {
        if (!$(this).hasClass(filterValue) && filterValue != 'all') {
        $(this).hide();
        } else {
        $(this).show();
        }
        });
        });
    }

if (page == "admin.php") {

    $(document).ready(function(){
        $("#myButton").click(function(){
        var x = $("#myInput");
        if (x.attr("type") === "password") {
        x.attr("type", "text");
        } else {
        x.attr("type", "password");
        }
        });
        });
}

  if (page == "admin-gestion.php") {
    $("#formulaire").submit(function(){
        alert("Informations envoyées avec succès!");
        });

  }