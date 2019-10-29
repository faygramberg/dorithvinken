<?php

/* Slug for CPT plugin	*/
define('MVPWP_SLUG', 'paintings');


/* Labels for CPT plugin	*/
function dorithvinken_mvpwp_product_labels( $labels ) {
	$labels = array(
	   'singular' => __('Painting', 'dorithvinken'),
	   'plural'   => __('Paintings', 'dorithvinken')
	);
	return $labels;
}
add_filter('mvpwp_default_projects_name', 'dorithvinken_mvpwp_product_labels');