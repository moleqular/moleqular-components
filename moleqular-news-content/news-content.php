<?php 

if (function_exists('acf_register_block')) {
	acf_register_block(array(
		'name'              => 'news-content',
		'title'             => __('News Content'),
		'description'       => __('This block is a custom news content block.'),
		'render_callback'   => 'acf_block_render_callback',
		'category'          => 'layout',
		'mode'              => 'edit',
		'icon'              => 'screenoptions',
		'keywords'          => array( 'content', 'block' ),
		'supports'          => array( 'mode' => false )
	));
}