	<a id="top" class="ss-icon" href="#" title="Back To The Top">Up <span>To the top</span></a>

	<!-- 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	 -->
	<script src="js/scripts-ck.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<script type="text/javascript">
		$(window).load(function() {
		   	$("#home_title").fitText(0.55);
		   	$("h2").fitText(1.2);
		   	$("h3").fitText(0.75);
		   	$("h3#fit").fitText(0.9);
		   	$("#fit_mobile_glance").fitText(1.5);
		   	$('.flexslider').flexslider();
			$("#submit").hide();
			$("#page-changer select").change(function() {
			    window.location = $("#page-changer select option:selected").val();
			})
			$(".tooltip").tipTip({maxWidth: "auto", edgeOffset: 10});
			var toTop = $('#top');
			toTop.click(function() {
				$('body,html').animate({scrollTop:0},800);
			});	
		});

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19400273-3']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>