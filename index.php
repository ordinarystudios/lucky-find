<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

 $featuredposttag = get_field('featured_tag', 'option');
 $postsperpage = get_field('number_of_features', 'option');

 $featuredpostargs = array(
		'post_type' => 'post',
		'tag' => $featuredposttag,
		'posts_per_page' => $postsperpage
 );

 $loopargs = array(
	 'tag__not_in' => 6 // This automatically be the featured post tag
 );

$context = Timber::get_context();
$context['featuredposts'] = Timber::get_posts($featuredpostargs);
$context['posts'] = Timber::get_posts($loopargs);
$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'home.twig' );
}
Timber::render( $templates, $context );
