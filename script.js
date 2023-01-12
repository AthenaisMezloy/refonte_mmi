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
  
// Dark mode
  
  $( "#btn-theme" ).on("click", function() { 
              if( $( "body" ).hasClass( "dark" )) { 
                  $( "body" ).removeClass( "dark" ); 
                  localStorage.removeItem('dark',this.clicked);
              } else { 
                  $( "body" ).addClass( "dark" ); 
                  localStorage.setItem('dark',this.clicked);
              } 
          }); 
  
          
          
  if(localStorage.getItem('dark')) {
      $("body").addClass("dark");
  }
  
// Nav animation

if (page == "index.php") {
    $(window).on("scroll",function() {
        if ($(window).scrollTop() == 0) {
            console.log("test")
            $("nav").removeClass("bg-cream");
        } else {
            $("nav").addClass("bg-cream");
        }
    })
} else {
    $("nav").addClass("bg-cream");
};

