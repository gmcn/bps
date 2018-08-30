<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header class="navigation" id="navigation">

		<div class="row">
			<div class="col-xs-6">
				<div class="scroll__branding">
					<h1>BELFAST POWER STATION</h1>
				</div>

			</div>
			<div class="col-xs-6">
				<!-- Static navbar -->
			      <nav class="navbar navbar-default">
			        <div class="container-fluid">
			          <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			          </div>
			            <?php wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id' => 'navbar',
										'container_id' => 'navbar',
										'container_class' => 'navbar-collapse collapse',
										'menu_class' => 'navbar-collapse',
										'items_wrap' => '<ul id="" class="nav navbar-nav navbar-right">%3$s</ul>' ) );
										?>
			        </div><!--/.container-fluid -->
			      </nav><!-- #site-navigation -->
			</div>
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
