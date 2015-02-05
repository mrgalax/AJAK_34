    	<div class="logo">
        	<a href="index.php"><img src="images/logo.png" alt="logo"/></a>
        </div>      
<div class="menu-wrap">    
	<ul class="menu">
		<li><a href="concept.html">Koncept</a></li>
		<li><a href="products.html">Produkter</a></li>
		<li><a href="movement.html">Bevægelse</a></li>
        <li><a class="skiftBank" href="changebank.html">Skift Bank</a></li>
        <li><a href="contact.html">Kontakt + FAQ</a></li>
        <li><a class="netBank" href="netbank.html">Netbank</a></li>
	</ul>
</div>  
<!-- ///// Menu ///// -->
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}
		/* ///// Mobile ///// */
		$('.menu-wrap').prepend('<div class="menu-trigger"><img src="images/mobile_menu_icon.png" alt="lock" width="20" style="position:relative; top:2px; left:0px" /></div>');		
		$(".menu-trigger").on("click", function(){
			$(".menu").slideToggle("fast");
		});
		/* ///// iPad ///// */
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('.menu ul').addClass('no-transition');      
    });          
</script>