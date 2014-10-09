﻿<?php

/** Cambia la cookie del idioma **/
if(isset($_GET['lang'])) {
   $iTiem = time() + (311040000);
   switch($_GET['lang']) {
      case 1:
         //Espanyol
         setcookie('idioma', 'es', $iTiem);
         break;
      case 2:
         //Ingles
         setcookie('idioma', 'en', $iTiem);
         break;
   }
}

/** Elige el idioma **/
if(!isset($_COOKIE['idioma'])) {
   //Crea la cookie si es la primera vez que entra 
   //y carga el idioma castellano por defecto
   include_once('textos_es.php');
   $iTiem = time() + (311040000);
   setcookie('idioma', 'es', $iTiem);
} else if(isset($_GET['lang'])) {
   //Carga el idioma elegido por el usuario
   switch ($_GET['lang']) {
      case 1:
         include_once('textos_es.php');
         break;
      case 2:
         include_once('textos_en.php');
         break;
   }
} else {
   //Carga el idioma guardad en la Cookie
   include_once('textos_'.$_COOKIE['idioma'].'.php');
}
?>

<!doctype html>  
<head>
   <meta charset="UTF-8">
   <title>GrungeSet- Home</title>
   <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

   <link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/> 
   <link rel="stylesheet" type="text/css" href="styles.css"/>

<!--[if lt IE 7]>
<style type="text/css">
	.gallery span { behavior: url(iepngfix.htc); cursor: pointer; }
	.gallery li { background: url(images/drop-shadow.gif) no-repeat center bottom; }
</style>
<![endif]-->

</head>
<body>

<!--start header-->
<header>
   <div class="container1">
      <!--start title-->
      <h1 class="fontface" id="title"><span class="orange">Gr</span><span class="pink">un</span><span class="purple">ge</span><span class="blue ">Se</span><span class="green ">t</span></h1>
      <!--end title-->
      <!--start menu-->
      <nav>
      <ul>
      <li><a href="index.html" class="grn"><?php echo $texto1; ?></a></li>
      <li><a href="about.html" class="pnk"><?php echo $texto2; ?></a></li>
      <li><a href="#" class="orng"><?php echo $texto3; ?></a></li>
      <li><a href="#" class="blu"><?php echo $texto4; ?></a></li>
      <li><a href="#" class="prpl"><?php echo $texto5; ?></a></li>
      </ul>
      </nav>
   </div>
   <div class="bottom"> </div>
   <!--end menu-->
   <!--end header-->
</header>

 <div id="container">
   <!--start intro-->
   <section id="intro">
     <div class="quote">
      <section class="welcome">
      <h2 class="fontface"> <span class="pink medium">100% Wild </span><span class="green small rotate">and </span>Crazy<span class="orange medium"> Grunge</span></h2> 
     </div>
   </section>
   <!--end intro-->
   
      <div class="group3">
      <h2> Music</h2>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>
      <div class="group3">
      <h2> Tour Dates</h2>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
      Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>
      <div class="group3">
      <h2> News</h2>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>
      <div class="group3">
      <h2> Rock On!</h2>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
      Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>

   <section id="main">
      <div class="portfolio">
      <h2 class="fontface"> <span class="orange ">Gal</span><span class="pink">lery</span></h2> 
       </div>
      <br><br>
      <ul class="gallery">
      <li><a href="#"><span></span><img src="images/11.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/9.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/4.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/7.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/5.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/6.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/3.jpg" alt="image" /></a></li>
      <li><a href="#"><span></span><img src="images/1.jpg" alt="image" /></a></li>
      </ul>
      </section>
   </div>

   <!--start footer-->
   <footer>

   <div class="container1">
     <p> Copyright © 2011 | GrungeSet Web Template </p> &nbsp;&nbsp;<a href="index.php?lang=1"><img align="center" width="50" heigth="30" src="images/espana.gif"></a>&nbsp;&nbsp;<a href="index.php?lang=2"><img align="center" width="50" heigth="30" src="images/reino_unido.gif"></a>
   </div>
   
   </footer>
   <!--end footer-->

<!-- Free template distributed by http://freehtml5templates.com -->   
 </body>
</html>