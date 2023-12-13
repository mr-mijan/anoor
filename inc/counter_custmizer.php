<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'counter_section',
	[
		'title'       => esc_html__( 'Counter Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Counter Repeter
new \Kirki\Field\Repeater(
	[
		'settings' => 'counter_repeater_setting',
		'label'    => esc_html__( 'Counter', 'anoor' ),
		'section'  => 'counter_section',
		'priority' => 10,
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Counter Number', 'anoor' ),
			'field' => 'lin_text',
		],
	
		'fields'   => [
			'counter_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Number', 'anoor' ),
				// 'description' => esc_html__( 'You can your progress number.', 'anoor' ),
				'default'     => '890',
                // 'choices'  => [
                //     'min'  => -10,
                //     'max'  => 100,
                //     'step' => 1,
                // ],
			],
			
			'counter_text_prefix'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Prefix', 'anoor' ),
                'default'  => esc_html__( '+', 'anoor' ),
			],

            'counter_text_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'anoor' ),
                'default'  => esc_html__( 'Complete Projects', 'anoor' ),
			],
		],
        
	]
);
}