<?php

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'featured-categories',
		'title'             => __('Featured Categories'),
		'description'       => __('This block is a custom featured categories block.'),
		'render_callback'   => 'acf_block_render_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'featured-categories', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}