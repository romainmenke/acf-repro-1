<?php

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

if (!isset($_GET['trigger-error'])) {
	\acf_add_local_field_group(
		array(
			'key'                   => 'some_group',
			'title'                 => 'Settings',
			'name'                  => 'some_group',
			'fields'                => array(
				array(
					'key'               => 'some_field',
					'label'             => 'Some field',
					'name'              => 'some_field',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'acf-options',
					),
				),
			),
			'menu_order'            => 10,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'active'                => 1,
			'description'           => '',
		)
	);
}
