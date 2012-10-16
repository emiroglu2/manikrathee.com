//@codekit-prepend "libs/jquery-1.8.2.min.js","libs/jquery.backstretch.js","libs/jquery.fittext.js","libs/jquery.flexslider.js","libs/jquery.api.instagram.js","libs/jquery.api.twitter.js","libs/jquery.twitter.js","libs/jquery.lettering.js","libs/jquery.prettyForms.js","libs/jquery.tipTip.js";

// "libs/ss-social.js", "libs/ss-standard.js"

// TipTip
$(".tooltip").tipTip({maxWidth: "auto", edgeOffset: 10});


// Instagram
instagramFeed.embed({
	username: 'manikrathee',
	count: 1,
	container: 'instagram'
});


// Social API
$(".social-api").delay(4500).queue(function(next){
	$(this).addClass('inactive');
	next();
});

 
 // Google Analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-19400273-3']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();