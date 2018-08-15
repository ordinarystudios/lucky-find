<?php
	 global $paged;
	 if (!isset($paged) || !$paged){
			 $paged = 1;
	 }
	 $context = Timber::get_context();
	 $args = array(
			 'post_type' => 'collection',
			 'posts_per_page' => 20,
			 'paged' => $paged
	 );
	 $context['posts'] = new Timber\PostQuery($args);
	 Timber::render('archive-collection.twig', $context);
