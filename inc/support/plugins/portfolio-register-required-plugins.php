<?php
/**
 * @package zboom
 */

require_once (get_template_directory() . '/inc/support/plugins/portfolio-plugin-activation.php' );


function portfolio_register_required_plugins() {

	$plugins = array(		
	
		array(
			'name'               => 'Classic Editor',
			'slug'               => 'classic-editor',
			'version'            => '1.6.3',
			'required'           => true,
		),

		array(
			'name'               => 'Classic Widgets',
			'slug'               => 'classic-widgets',
			'version'            => '0.3',
			'required'           => true,
		),

		array(
			'name'               => 'Advanced Custom Fields',
			'slug'               => 'advanced-custom-fields',
			'version'            => '6.2.2',
			'required'           => true,
		),

		array(
			'name'               => 'Contact Form 7',
			'slug'               => 'contact-form-7',
			'version'            => '5.8.2',
			'required'           => true,
		),

		
	);

	$config = array(
		'id'           => 'portfolio',
		'menu'         => 'install-required-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => false,
		'is_automatic' => false,
		'default_path' => false
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'portfolio_register_required_plugins' );
