<?php

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'form',
		'title'             => __('Form'),
		'description'       => __('This block is a custom form block.'),
		'render_callback'   => 'acf_block_render_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'form', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}