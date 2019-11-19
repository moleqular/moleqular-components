<?php

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'single-column-with-cta',
		'title'             => __('Single Column with CTA'),
		'description'       => __('This block is a custom single column with CTA block.'),
		'render_callback'   => 'acf_block_render_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'content', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}