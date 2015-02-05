<!doctype html>
<html>
<head>
<!-- head content here -->
<title>Andelskassen JAK</title>

<!-- ///// META-TAGS & DESCRIPTION ///// -->
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Få økonomisk overblik og personlig rådgivning." />

<!-- ///// STYLESHEETS & FAVORITE ICON ///// -->
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" href="css/slider.css" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" />
<!-- 980px TO FIX EXPLORER AND FIREFOX BUG ON RESIZING -->
<link rel="stylesheet" href="css/responsive.css" media="all and (max-width: 980px)" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />

<!-- ///// FONTS ///// -->
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- ///// SCRIPTS ///// -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
function scrResolution(){
        var width=screen.width;
        var height = screen.height;        
		document.getElementById("txt_scrWidth").value=width;        
		document.getElementById("txt_scrHeight").value=height;
}
</script>

<!-- ///// IE9 - DAMNED BROWSER ///// -->
<!--[if IE 9]>
<style type="text/css">
.menu ul {top: 23px;}
.gradient {filter: none;}
</style>
<![endif]-->

<body onload="scrResolution();">

<div class="globalContainer"> 
  <!-- noscript tag -->
  <noscript>
  <div class="noScriptContainer">
    <div class="noScriptBox">
      <h1>JavaScript er slået fra.</h1>
      <p>Denne hjemmeside ses bedst med JavaScript slået til.</p>
      <p>Læs venligst her <a href="http://www.google.com/support/bin/answer.py?answer=23852">hvordan du aktiverer JavaScript</a>.</p>
      <p>Har du aktiveret JavaScript, kan du genstarte <a href="">vores side her.</a>.</p>
    </div>
  </div>
  </noscript>
  <div class="headerContainer">
    <div class="headerMenu">
 		<?php include_once("php_menu.php"); ?>
    </div><!-- end .headerMenu -->  
  </div><!-- end .headerContainer --> 
  <div class="contentContainer">
    <div class="contentArea">
      <div class="sliderSpace">
        <div class="container">
          <div id="slides"> 
            <!-- CLASS background -->
            <div class="slideBg">
              <!-- CLASS video -->
              <div class="slideVideo">
                <h3 class="greenFont">Overskrift</h3>
                <iframe class="iFrame" src="http://www.youtube.com/embed/w01zHFaATLY?wmode=opaque&autoplay=0&loop=1&rel=0&border=0&modestbranding=0" frameborder="0" wmode=transparent allowfullscreen></iframe>
                <p>Tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst. Se vores video her:</p> <div class="buttonWhite"><li><a href="http://www.youtube.com/watch?feature=player_embedded&v=w01zHFaATLY">JAK Video</a></li></div>
                 
              </div>
            </div>
<!--            <div class="slideTxt">
              <h3 class="greenFont">TEST HTML</h3>
              <p class="greenFont">tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</p>
            </div>-->
            <img src="images/goodside.png" alt="Photo by: casper splidsboel"> 
            <img src="images/badside.png" alt="Photo by: casper splidsboel"> 
            </div>
        </div>
        
        <!-- SlidesJS Required: Link to jQuery --> 
        <script src="scripts/jquery.slides.min.js"></script> 
        <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready --> 
        <script>
            $(function() {
              $('#slides').slidesjs({
                width: 960,
                height: 320,
                navigation: {
                  effect: "fade"
                },
                pagination: {
                  effect: "fade"
                },
                play: {
                  effect: "fade",
                  active: true,
                  auto: true,
                  interval: 4000,
                  swap: true,
                },
                effect: {
                  fade: {
                    speed: 500
                  }
                }
              });
            });
          </script> 
        <!-- End SlidesJS Required --> 
        
        <div class="mobSliderTxt">
        	<p>Tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst. Se vores video her:</p> <div class="buttonWhite"><li><a href="http://www.youtube.com/watch?feature=player_embedded&v=w01zHFaATLY">JAK Video</a></li></div>
        </div>
      </div>
      <!-- end .sliderSpace --> 
    </div>
    <!-- end .contentArea --> 
  </div>
  <!-- end .contentContainer -->
  <div class="boxContainer">
    <div class="boxArea">
      <div class="boxRowOne">
        <div class="boxLargeLeft">
          <div class="boxSmall"> <a class="BoxOneImg" href="#"></a>
            <h3 class="greenFont">Rente-Fri</h3>
            <p>Har du lyst til at være en del af en positiv udvikling, så læs her:</p> <div class="buttonBlack"><li><a href="http://www.youtube.com/watch?feature=player_embedded&v=w01zHFaATLY">Rente-Fri</a></li></div>
          </div>
          <div class="boxSmallTwo"> <a class="BoxTwoImg" href="#"></a>
            <h3 class="greenFont">Støttekonto</h3>
		    <p>Har du lyst til at være en del af en positiv udvikling, så læs her:</p> <div class="buttonBlack"><li><a href="http://www.youtube.com/watch?feature=player_embedded&v=w01zHFaATLY">Støttekonto</a></li></div>
          </div>
        </div>
        <!-- end .boxLarge -->
        <div class="boxLargeRight">
          <div class="boxSmall"> <a class="BoxThreeImg" href="#"></a>
            <h3 class="greenFont">Omstillingskonto</h3>
		    <p>Har du lyst til at være en del af en positiv udvikling, så læs her:</p> <div class="buttonBlack"><li><a href="http://www.youtube.com/watch?feature=player_embedded&v=w01zHFaATLY">Rente-Fri</a></li></div>
          </div>
          <div class="boxSmallTwo"> <a class="BoxFourImg" href="#"></a>
            <h3 class="greenFont">Overskrift</h3>
		    <p>Har du lyst til at være en del af en positiv udvikling, så læs her:</p> <div class="buttonBlack"><li><a href="http://www.youtube.com/watch?feature=player_embedded&v=w01zHFaATLY">f-knap</a></li></div>
          </div>
        </div>
        <!-- end .boxLarge --> 
      </div>
      <!-- end .boxRowOne --> 
      <!-- ///// BoxRowTwo - Nyheder & Bevægelse ///// -->
      <div class="boxRowTwo">
        <div class="newsFeedHot">
          <div class="newsFeedHotImg"> <a class="newsFeedHotImgLink" href="news.html"></a> </div>
          <div class="newsFeedHotHeadline"> <a href="news.html">
            <h3 class="greenFont">Billån er en mulighed hos J.A.K.</h3>
            </a> </div>
          <div class="newsPublisher">
            <p>Mikkel Klinge Nielsen / 21-03-2013</p>
          </div>
          <div class="newsFeedHotTxt">
            <p>De fleste bilforhandlere kan tilbyde finansiering med en lav rentesats, og mange gange kan forhandleren samtidig tilbyde en attraktiv forsikring. Til gengæld kommer der ofte diverse gebyrer oveni. Hvis du tjekker den årlige omkostningsprocent (ÅOP) på lånet, kan du få svar på, hvad der vil være bedst for dig. </p>
          </div>
          <div class="newsFeed"> <a href="#">
            <h3 class="greenFont">Åbent hus i KBH alle Torsdage. (8/3-2013)</h3>
            </a> <a href="#">
            <h3 class="greenFont">Nyt hovedsæde og opdateret kontakt-info. (8/3-2013)</h3>
            </a> <a href="#">
            <h3 class="greenFont">Finanstilsynets rapport 2012. (8/3-2013)</h3>
            </a> </div>
        </div>
        <!-- end .newsFeedHot -->
        <div class="theMovement"> 
          <!--<div class="theMovementImg"><a class="theMovementImgLink" href="#"></a></div>-->
          <div class="theMovementTxt"> <a href="#">
            <h3 class="greenFont">Om bevægelsen - Grønt pengeinstitut</h3>
            </a> 
            <!--<img src="images/leaf.png" alt="leaf" width="50%" style="position:absolute; right:0px; z-index:-100; max-width:50%;" />-->
            <p>Bevægelsen JAK har arbejdet for rentefrit samfund siden 1931 – først vha. rentefri pengeskabelse, siden vha. rentefri finansiering og oplysningsarbejde.<br />
              Vi stræber efter i videst muligt omfang at blive et rendyrket rentefrit helkundepengeinstitut. Vores nye rentefri finansieringsmodel kan – i langt højere grad end den rentefri model, vi tidligere har benyttet – tilfredsstille vores brugeres lånebehov.<br />
              <br />
              Det er dog urealistisk at forvente, at vi kan blive et fuldstændigt rentefrit pengeinstitut – dvs. som aldrig benytter sig af rentebaseret funding – indenfor det nuværende finansielle systems rammer. Men vi vil gøre hvad vi kan for at reducere og udfase vores rentebaseret funding og udlån – og øge vores rentefri afdeling.</p>
          </div>
        </div>
        <!-- end .theMovement --> 
      </div>
      <!-- end .boxRowTwo --> 
    </div>
    <!-- end .boxArea --> 
  </div>
  <!-- end .boxContainer -->
  <div class="footer">
    <div class="footerArea">
      <div class="footerMenu">
        <ul>
          <li><a href="#">Persondatapolitik</a></li>
          <li><a href="#">Presse</a></li>
          <li><a href="#">Karriere</a></li>
          <li><a href="#">Tilsyn</a></li>
          <li><a href="#">Om J.A.K</a></li>
          <li><a href="contact.html">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </div>
    
</div>
<!-- end .globalContainer --> 

<!-- WINDOW WIDTH HACK -->
<!--<div id="dimensions" style="position: fixed; right: 10px; bottom: 0px; background: #000; font-size: 13px; color: #FFF; padding: 10px; border: 2px dashed #FF0; border-radius:10px;">
  <p style="color:#fff">Sune's info felt:</p>
  <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/pages/Groupx/169248409894037&amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:25px;" allowTransparency="true"></iframe>
  <style>
.fbook{position: absolute; font-color:#ddd; top:-1668px; font-size:10;}
</style>
  </style>
  <a href="http://www.howtoaddlikebutton.com" class="fbook">please wait a few seconds</a>
  <style>
.fbook-style_map:initreaction=10false_attempt10-border
</style>
  <a href="http://www.kosmetikstudio-hamburg.net/haarentfernung-hamburg" class="fbook">Sugaring Hamburg</a>
  <style>
closemap"init"if=fb_connect-start="25"check_bandwith
</style>
  <br />
  <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fgroupx.dk%2FAJAK_11%2F"><img src="images/w3c.png" alt="w3c" width="56" height="56" style="float:right"></a> Skærm Bredde: <br />
  <span class="width" style="background-color:#FC0; color:#000; border: 2px solid #fff; border-style:outset;"></span> <br />
  Opløsning: <br />
  <input name="txt_scrWidth" type="button" id="txt_scrWidth" size="5" style="background-color:#FC0; border: 2px solid #fff; border-style:outset;" />
  x
  <input name="txt_scrHeight" type="button" id="txt_scrHeight" size="5" style="background-color:#FC0; border: 2px solid #fff; border-style:outset;" />
</div>
<script src="scripts/widthDisplay.js"></script> -->
<!-- end. WINDOW WIDTH HACK -->

</body>
</html>
