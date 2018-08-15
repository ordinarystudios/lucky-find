<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

 global $paged;
 if (!isset($paged) || !$paged){
		 $paged = 1;
 }
 $context = Timber::get_context();
 $args = array(
		 'post_type' => 'collection',
		 'posts_per_page' => 5,
		 'paged' => $paged
 );
 $context['collections'] = new Timber\PostQuery($args);

$post = Timber::query_post();
$context['post'] = $post;

if ( post_password_required( $post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig' ), $context );
}
