<?php
/**
 * This file loads the google analytics and adds custom content groups where necessary.
 *
 * Plugin Name: Pound and Grain Google Analytics
 * Description: Loads Google Analytics and allows for custom google analyctics code integration.
 * Author: Pound and Grain
 * Author URI: http://poundandgrain.com/
 * Version:           1.0.0
 */
function pg_load_ga(){
	$ga_code = apply_filters( 'pg_google_analytics_id', 'UA-72640311-1' );
	?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo $ga_code; ?>', 'auto');
		<?php do_action( 'pg_custom_analytics' ); ?>
		ga('send', 'pageview');

	</script>
<?php
}

add_action( 'wp_head', 'pg_load_ga' );
