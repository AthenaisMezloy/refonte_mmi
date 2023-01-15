var path = window.location.pathname;
var page = path.split("/").pop();
console.log( page );

// Fil d'Ariane

$('.list li a').on('click', function() {
    //selecting the syllabus class
      $select = $('<div class="syllabus"></div>');
      $(this).parents('li').each(function(n, li) {
         //Adding / to each anchor tag of li
          $select.prepend(' / ',$(li).children('a').clone());
      });
    // Displaying the hierarchical order of pages.
    $('.display').html(
      $select.prepend('<a href="#syllabus">GeeksforGeeks</a>'));   
  })

//
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
// Nav animation

if (page == "index.php") {

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
// Boutons de Sections

$(document).ready(function() {
    
    $("#btn-1").addClass("bg-orange");
    $(".icon").addClass("bg-grey");

    $(".icon").on('click', function(event){
        var id = $(event.target).attr('id');
        console.log(id);
        $(".icon").removeClass("bg-orange");
        $(this).addClass("bg-orange");
        
      });

});

//
// filtre projets

var filterButtons = document.querySelectorAll('.filter-button');
filterButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var filterValue = button.getAttribute('data-filter');
        var articles = document.querySelectorAll('.article-box');
        articles.forEach(function(article) {
            if (!article.classList.contains(filterValue) && filterValue != 'all') {
                article.style.display = 'none';
            } else {
                article.style.display = 'block';
            }
        });
    });
});
``
