<?php

/**
 * Enqueues scripts and styles for front end.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function lowermedia_landingpage_scripts_styles() {

	// Loads our main stylesheet.
	wp_enqueue_style( 'lowermedia_landingpage-style', get_stylesheet_uri(), array(), '2013-07-18' );
}
add_action( 'wp_enqueue_scripts', 'lowermedia_landingpage_scripts_styles' );

// Include the Google Analytics Tracking Code (ga.js)
// @ http://code.google.com/apis/analytics/docs/tracking/asyncUsageGuide.html
function google_analytics_tracking_code(){

	$propertyID = 'UA-XXXXX-X'; // GA Property ID

	if ($options['ga_enable']) { 


		/*<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', '<?php echo $propertyID; ?>']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>*/?>

		

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-21432914-19', 'rubygettinger.net');
	  ga('send', 'pageview');

	</script>

<?php }
}

// include GA tracking code before the closing head tag
//add_action('wp_head', 'google_analytics_tracking_code');

// OR include GA tracking code before the closing body tag
 add_action('wp_footer', 'google_analytics_tracking_code');