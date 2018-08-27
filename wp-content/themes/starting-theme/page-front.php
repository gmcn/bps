<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-front/intro.php"));
include(locate_template("inc/page-front/about.php"));
include(locate_template("inc/page-front/keyfacts.php"));
include(locate_template("inc/page-front/env-standards.php"));
include(locate_template("inc/page-front/strategic-location.php"));
include(locate_template("inc/page-front/professional-team.php"));
include(locate_template("inc/page-front/brochure.php"));
?>

<?php
//get_sidebar();
get_footer();
