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
<script type="text/javascript">
$(document).ready(function(){
	$(".toggle_container").hide();
	$("h2.expand_heading").toggle(function(){
		$(this).addClass("active"); 
		}, function () {
		$(this).removeClass("active");
	});
	$("h2.expand_heading").click(function(){
		$(this).next(".toggle_container").slideToggle("fast");
	});
	$(".expand_all").toggle(function(){
		$(this).addClass("expanded"); 
		}, function () {
		$(this).removeClass("expanded");
	});
	$(".expand_all").click(function(){
		$(".toggle_container").slideToggle("fast");
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$(".toggle_container2").hide();
	$("h2.expand_heading2").toggle(function(){
		$(this).addClass("active2"); 
		}, function () {
		$(this).removeClass("active2");
	});
	$("h2.expand_heading2").click(function(){
		$(this).next(".toggle_container2").slideToggle("fast");
	});
	$(".expand_all2").toggle(function(){
		$(this).addClass("expanded2"); 
		}, function () {
		$(this).removeClass("expanded2");
	});
	$(".expand_all2").click(function(){
		$(".toggle_container2").slideToggle("fast");
	});
});
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
  
  <div class="contentContainer"></div>
  <div class="boxContainer">
    <div class="boxArea"> 
      <!-- ///// BoxRowTwo - Nyheder & Bevægelse ///// -->
      <div class="boxRowTwo">
        <div class="prodWrapper">
          <form style="margin-bottom:20px;">
            <input type="search" placeholder="Stil et spørgsmål her ...">
          </form>
          
          <!--<form id="demo-b"><input type="search" placeholder="Search"></form>--> 
          
          <!--<input class="searchForm" type="search" name="search" value="stil et spørgsmål her" onClick="this.value=''" />-->
          <div class="expand_wrapper">
            <h2 class="expand_heading"><a href="#">Spørgsmål 1</a></h2>
            <div class="toggle_container">
              <div class="box">
                <h3>Spørgsmål - Nøgleord</h3>
                <p><img src="images/creditcard.png" alt="flower" /> Du har et spørgsmål, som du gerne vil havde svar på <br />
                  Her er dit svar....... b </p>
              </div>
            </div>
          </div>
        </div>
        <div class="contactBox">
          <h3>Kontakt</h3>
          <ul>
            <li>
              <h3 class="greenFont">Telefon: 58 50 47 70.</h3>
            </li>
            <li>
              <h3 class="greenFont"> E-mail: info@ajak.dk</h3>
            </li>
          </ul>
          <br />
          <h3>Kontakt - afdelinger:</h3>
          <div class="expand_wrapper2"> <!-- baggrund til afdelings kontakter -->
            <h2 class="expand_heading2"><a href="#">København</a></h2>
            <div class="toggle_container2">
              <div class="box">
                <div class="contactUnfolded">
                  <h3>Kontakt</h3>
                  <ul>
                    <li>
                      <h3 class="greenFont">Adresse: Nytorv 7.</h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Baghuset 1 sal.</h3>
                    </li>
                    <li>
                      <h3 class="greenFont">1450 København K.</h3>
                    </li>
                    <li>
                      <h3 class="greenFont"> Telefon: 5850nnnn</h3>
                    </li>
                    <li>
                      <h3 class="greenFont">{Link til Google Maps}</h3>
                    </li>
                  </ul>
                </div>
                <!-- end .newsFeedHot -->
                <div class="contactUnfoldedRight">
                  <h3>Åbningstid:</h3>
                  <ul>
                    <li>
                      <h3 class="greenFont">Man tt.mm-tt.mm</h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Tir tt.mm-tt.mm </h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Ons tt.mm-tt.mm </h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Tors tt.mm-tt.mm </h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Fre tt.mm-tt.mm </h3>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <h3>Kontakt - Personer:</h3>
          <div class="expand_wrapper2">
            <h2 class="expand_heading2"><a href="#">Udviklingschef</a></h2>
            <div class="toggle_container2">
              <div class="box">
                <div class="contactUnfolded">
                  <h3>Kontakt</h3>
                  <ul>
                    <li>
                      <h3 class="greenFont">Navn: Mikkel Klinge Nielsen.</h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Tlf: 33993399.</h3>
                    </li>
                    <li>
                      <h3 class="greenFont">Email: email@email.com. </h3>
                    </li>
                  </ul>
                </div>
                <div class="contactUnfoldedRight">
                  <p><img src="images/mkn.jpg" width="60%" alt="flower" /></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
          <li><a href="#">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- end .globalContainer --> 

<!-- WINDOW WIDTH HACK -->
<div id="dimensions" style="position: fixed; right: 10px; bottom: 0px; background: #000; font-size: 13px; color: #FFF; padding: 10px; border: 2px dashed #FF0; border-radius:10px;">
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
<script src="scripts/widthDisplay.js"></script> 
<!-- end. WINDOW WIDTH HACK -->

</body>
</html>
