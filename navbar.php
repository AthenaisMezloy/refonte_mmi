<script src=
   "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>

<link rel="stylesheet" href="footer-nav-style.css">

<style>
    .dark{ 
    background-color: black; 
    color: white; 
    }

    .dark a{
        color: white;
    }

    .dark .block {
        background-color: black;
    }

</style>

<nav>
    <div>
        <img src="./img/assets/logo_img.svg" alt="">
    </div>
    <ul class="list">
        <li><a href="./index.php">Accueil</a></li>
        <li><a href="">La Formation</a></li>
        <li><a href="./project.php">Projets</a></li>
        <li><a href="">Après MMI</a></li>
        <li><a href="./international.php">International</a></li>
        <li><a href="./about.php">À propos</a></li>
        <li><button id="btn-theme">Jour</button>
</li>
    </ul>
</nav>
<div class="display">
    <div class="syllabus">
      <a href="#">GeeksforGeeks / </a>
    </div>
  </div>

<script type="text/javascript">
 
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

</script>
