<?php

/*
Plugin Name: Ctrl Login
Plugin URI: https://bitbucket.org/aubreypwd/ctrl_login
Description: Allows a user to reach the login page by simply pressing Ctrl + L.
Author: Aubrey Portwood
Version: 0.1
Author URI: http://aubreypwd.com
*/

function ctrl_login_scripts() {
	wp_enqueue_script( 'jquery' );
}    
add_action('wp_enqueue_scripts', 'ctrl_login_scripts');

function ctrl_login_head(){

	?>
		<!-- ctrl_login -->
		<script src="<?php echo plugin_dir_url( __FILE__)."ctrl_login.js"; ?>"></script>
		<script>
			jQuery(document).ready(function() {
				jQuery.ctrl('L', function() {
					window.location.href='<?php bloginfo('url'); ?>/wp-login.php?redirect_to=<?php if(is_home()) bloginfo('url'); else the_permalink(); ?>';
				});
			});
		</script>
	<?php
}

add_action('wp_head','ctrl_login_head');

?>