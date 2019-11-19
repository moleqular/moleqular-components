<?php 

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'multimedia',
		'title'             => __('Multimedia'),
		'description'       => __('This block is a custom multimedia block.'),
		'render_callback'   => 'custom_multimedia_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'multimedia', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}

	
function custom_multimedia_callback($block, $content = '', $is_preview = false) {

	$fields = get_fields();
	$mediaTypeKey = 'field_5d83db599b1db';
	$allMediaTypes = array_keys(get_field_object($mediaTypeKey)['choices']);
	$currentMediaType = $fields['required_options']['media_type'];
	$automaticFeed = $fields['required_options']['feed_type'];
	$grid = get_field('required_options')['grid'];
	
	$results = null;
	$partial = null;
	$selection = null;
	$heading = null;
	
	if(!empty($allMediaTypes) && !empty($currentMediaType)) {
		foreach ($allMediaTypes as $type) {
			
			if ($type == $currentMediaType) {
				
				$limit = get_field('required_options')['post_amount'];
				$partial = $type;
				$selection = $type . '_selection';

				if ($type == 'card') {

					$heading = 'Featured Content';
					$results = get_field($selection);

				} elseif($automaticFeed) {

					if ($type == 'post') {
						$heading = 'Latest News.';
					} elseif($type == 'case-study') {
						$heading = 'Latest Case Studies.';
					} elseif ($type == 'sector') {
						$heading = 'Latest Sectors.';
					} elseif ($type == 'service') {
						$heading = 'Latest Service.';
					} elseif ($type == 'career') {
						$heading = 'Latest Careers.';
					} elseif ($type == 'card') {
						$heading = 'Latest Content';
					}

					if ($grid == 3) {
						$results = get_multimedia($type, $limit);
					} elseif ($grid == 2) {
						$results = get_multimedia($type, $limit);
					}

				} else {

					if ($type == 'post') {
						$heading = 'Featured News.';
					} elseif($type == 'case-study') {
						$heading = 'Featured Case Studies.';
					} elseif ($type == 'sector') {
						$heading = 'Featured Sectors.';
					} elseif ($type == 'service') {
						$heading = 'Featured Service.';
					} elseif ($type == 'career') {
						$heading = 'Featured Careers.';
					} elseif ($type == 'card') {
						$heading = 'Featured Content';
					}

					$results = get_field($selection);
					
				}

			}
		}
	}
	
	$context = Timber::get_context();
	$context['block'] = $block;
	$context['item'] = $fields;
	$context['is_preview'] = $is_preview;
	$context['results'] = $results;
	$context['view'] = $partial;
	$context['heading'] = $heading;
	
	Moleqular\Helpers::render($context, false, 'blocks/'. str_replace('acf/', '', $block['name']) .'.twig');
}