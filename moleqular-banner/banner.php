<?php

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'banner',
		'title'             => __('Banner'),
		'description'       => __('This block is a custom banner block.'),
		'render_callback'   => 'acf_block_render_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'banner', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}
