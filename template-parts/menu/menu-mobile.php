<?php
/**
 * Displays mobile menu
 *
 * @package Cenote
 */

?>
<nav id="mobile-navigation" class="cenote-mobile-navigation">

<!-- Torres Digital menu mobile logo -->
<a id="torres-digital-logo-sticky" class="torres-digital-logo-sticky" href="/"></a>

	<?php
	wp_nav_menu( array(
		'theme_location' => 'tg-menu-primary',
		'menu_id'        => 'primary-menu',
	) );
	?>
</nav><!-- #mobile-navigation -->

