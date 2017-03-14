<?php
session_start();

$errors = [];
if (isset($_SESSION['errors'])){
    $errors = $_SESSION['errors'];
}

$postdata = [];
if (isset($_SESSION['field'])){
    $postdata = $_SESSION['field'];
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Page
    ================================================== -->
    <meta charset="utf-8">
<meta name="author" content="Animakit" />
<meta name="description" content="Animakit - Real-time animation !" />
<meta name="keywords" content="Play cartoon, play cartoon character, Animate character, animate avatar, record cartoon, record animation, youtube animation, interactive story, interactive cartoon, markerless motion capture, kinect motion capture, realtime animation, realtime motion capture, Realtime character animation, make animated video, make cartoon, animated video, animated presentation, virtual character, virtual puppeteer, realtime facial animation, power puppets, kinect hack, brekel kinect, faceshift, facerig, face plus unity,  iclone, goanimate, daz3D, ipisoft, mixamo, talking tom, animalive, project natal, animated talkshow, Turtle Talk, Disney Stich show, jouer un personnage animé, faire dessin animé, Animation en direct, personnage en direct, histoire interactive, dessin animé interactif, capture de mouvements sans marqueurs, capture de mouvements temps réel, animation personnage temps réel, animer un personnage, animer un avatar, animation dailymotion, animation temps réel, faire une vidéo animée, présentation animée, personnage virtuel, marionnette virtuelle, animation faciale temps réel, jouer un personnage virtuel, desempeñar un personaje animado, interpretar a un personaje, Animar a un personaje, animar mi avatar, historia interactiva, Registro animación de dibujos animados, dibujo animado interactivo, youtube animación, captura de movimiento sin marcadores, captura de movimiento en tiempo real, captura de movimiento Kinect, animación de personajes, realizar video animado, hacer dibujos animados, video animado, presentación animada, personaje virtual, titiritero virtua, animacion facial, marionetas virtuales" />
<meta name="robots" content="index, follow" />
    <!--meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animakit</title>
     <meta name="google" value="notranslate">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">



    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

  </head>
  <body>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80051765-1', 'auto');
  ga('send', 'pageview');

</script>
<?php include_once("analyticstracking.php") ?>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <img class="navbar-brand" src="animakitstudios.com_logo.png" alt="Le logo" /> 
        </div>

        <!--toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">


            <li><a href="index.html">Home</a></li>
            <li><a href="produit1.html">Products</a></li>
            <li><a href="https://fr-fr.facebook.com/animakitstudioscom-148440078584520/">Community</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- Home Page
    ==========================================-->

         <!-- Home Section -->
        <div id="tf-Contact" class="text-center">

<div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">
                    </div>
                </div>

                        <h1 class="title"> Got something in mind ?</h1>
                        <p class="contactform">Our know how start from original designs all the way to
                        finished products.<br>
                        If you would like to costumize a show or just come for demo, our teams will<br>
                        be glad to reply you by email or welcome you in our studios.</p>

            </div>
        </div>
    </div>

            <script>

                 $(function(){

                var name = $('#Name'),
                    first_name = $('#first_name'),
                    email = $('#Email'),
                    Subject = $('#Subject'),
                    message = $('#Message');

                // VERIFICATION NOM
                Name.keyup(function(){
                    if($(this).val().length > 50){
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });

                // VERIFICATION MAIL
                Email.keyup(function(){
                    if(($(this).val().indexOf('@') == -1) || ($(this).val().indexOf('.') == -1)) {
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });

                // VERIFICATION SUJET
                Subject.keyup(function(){
                    if($(this).val().length < 5){
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });

                // VERIFICATION MESSAGE
                Message.keyup(function(){
                    if($(this).val().length < 2){
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });

            });
        </script>

        </script>
        <main id="formulaire" class="center">

            <form method="post" action="include/email.php">
                <input type="text" id="Name" name="Name" placeholder="Name" value="<?php echo (isset($postdata['Name'])?$postdata['Name']:'') ?>">
                <input type="email" id="Email" name="Email" placeholder="Email" value="<?php echo (isset($postdata['Email'])?$postdata['Email']:'') ?>">
                <input type="text" id="Subject" name="Subject" placeholder="Subject" value="<?php echo (isset($postdata['Subject'])?$postdata['Subject']:'') ?>">
                <textarea id="Message" name="Message" cols="27" rows="10" placeholder="Tell us a little more about your project ?"><?php echo (isset($postdata['Message'])?$postdata['Message']:'') ?></textarea>
                <input id="validation" type="submit" value="Send">
            </form>

        </main>
       <table style="width:100%;">
			<tbody><tr>
            	<td style="width:50%;">
                	<font color="white">XD productions</font>
                </td>
                <td style="width:50%;">
                	<font color="white">Rise impact ltd</font>
                </td>
        	</tr>
        	<tr>
            	<td>
                	<iframe id="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1748.7467510778104!2d2.5320498276337604!3d48.834573561121964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60de88ab6cfcf%3A0x85d7c6f785c57865!2s2+Avenue+de+l'Europe%2C+94360+Bry-sur-Marne!5e0!3m2!1sfr!2sfr!4v1463650438563" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </td>
                <td style="width:100%;">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.025748658948!2d114.17152784999854!3d22.277014449298527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404005b7d43881b%3A0x5d0f2ba8d9f1058a!2sThomson+Commercial+Building%2C+76-78+Thomson+Rd%2C+Wan+Chai%2C+Hong+Kong!5e0!3m2!1sfr!2sfr!4v1474011816515" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </td>
        	</tr>
        </tbody></table>

<!-- Home Section 
<div class="container-fluid text-center" id="home">
  <div class="jumbotron text-center">
  </div>  
</div>-->

<!-- footer
    ================================================== -->

      <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no" />
    
    
    <link rel='stylesheet prefetch' href='cssfooter/responsivefooter.css'>

        <link rel="stylesheet" href="cssfooter/style.css">


   <div id="footer">


  <div id="footer-copy" class="content-safe">
    
    <div class="footer-group footer-group-logo">

      <!--<div id="footer-logo"></div>-->
       <h5> About Us </h5>

 <hr>
      <p>
Founded by French pioneers of Motion capture and 3D<br> animation 15 years ago, with 800m2 motions capture <br>
studio in Paris and Hong Kong, we work  and create <br>with partners from all over the word. <br>
Fell free to contact us our staff speak English, spanish, <br>Chineses and french..
Bienvenue :)
    </p>
    </div>

    <div class="footer-group">
    <div class="mapss">
      <h3>Site map</h3>
      <a href="produit1.html">Products</a>
      <a href="https://fr-fr.facebook.com/animakitstudioscom-148440078584520/">Community</a>
      <a href="contact.php">Contact</a>
      </div>
            <div class="langue-inter">
      <h3 class="langue">Language</h3>
      <a href="index-fr.html">Français</a>
      <a href="index.html">English</a>
      <a href="http://www.xd-sz.cn/index.html">中国语文</a>
      </div>
                <ul class="footer-social">
      <li><a href="https://fr-fr.facebook.com/animakitstudioscom-148440078584520/"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.youtube.com/user/animakitstudios"><i class="fa fa-youtube"></i></a></li>
      <li><a href="https://www.instagram.com/p/8NSwpGysZZ/"><i class="fa fa-instagram"></i></a></li>
      <li><a href="https://twitter.com/animakit_s"><i class="fa fa-twitter"></i></a></li>
      </ul>

    </div> 
    <div class="clear-floats"></div>
    
    <div id="footer-contact">
      <div>Animait Studios » is a Registered Trademark / all Rights Reserved XD Productions and Rise Impact ltd |<a href="https://www.google.fr/maps/place/2+Avenue+de+l'Europe,+94360+Bry-sur-Marne/@48.8368281,2.5322066,17z/data=!3m1!4b1!4m2!3m1!1s0x47e60de6017970e5:0xe8a4500e75a1ddd8" target="_blank"> 2 Avenue de L'Europe, 94360, Bry Sur Marne, FRANCE</a><a href="https://www.google.fr/maps/place/Thomson+Commercial+Building,+76-78+Thomson+Rd,+Wan+Chai,+Hong+Kong/@22.2770144,114.1715278,17z/data=!3m1!4b1!4m5!3m4!1s0x3404005b7d43881b:0x5d0f2ba8d9f1058a!8m2!3d22.2770095!4d114.1737219" target="_blank"> Thomson Commercial bldg, 20/F, WanChai. Hong Kong|</a><a href="mailto:mail@animakitstudios.com"> mail@animakitstudios.com</a>
      </div>



    </div>
</div>
</footer>




    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all-->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.vide.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/var timer.js"></script>

  </body>
</html>