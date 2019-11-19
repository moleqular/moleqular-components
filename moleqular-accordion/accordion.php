<?php

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'accordion',
		'title'             => __('Accordion'),
		'description'       => __('This block is a custom accordion block.'),
		'render_callback'   => 'acf_block_render_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'accordion', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}