<?php
// This file is generated. Do not modify it manually.
return array(
	'agenda-wrapper' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'event-core-blocks/agenda-wrapper',
		'version' => '0.1.0',
		'title' => 'Agenda Wrapper',
		'category' => 'layout',
		'icon' => 'calendar-alt',
		'description' => 'Контейнер для пунктов расписания.',
		'supports' => array(
			'html' => false,
			'__experimentalInnerBlocks' => true
		),
		'textdomain' => 'event-core-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'features-grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'event-core-blocks/features-grid',
		'version' => '0.1.0',
		'title' => 'Features Grid',
		'category' => 'layout',
		'icon' => 'grid-view',
		'description' => 'Сетка для вывода преимуществ или характеристик.',
		'attributes' => array(
			'columns' => array(
				'type' => 'number',
				'default' => 3
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			)
		),
		'textdomain' => 'event-core-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'features-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'event-core-blocks/features-item',
		'version' => '0.1.0',
		'title' => 'Feature Item',
		'category' => 'layout',
		'parent' => array(
			'event-core-blocks/features-grid'
		),
		'icon' => 'saved',
		'description' => 'Отдельная карточка преимущества.',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'h3'
			),
			'description' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'p'
			)
		),
		'supports' => array(
			'html' => false,
			'reusable' => false
		),
		'textdomain' => 'event-core-blocks',
		'editorScript' => 'file:./index.js'
	),
	'hero-section' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'event-core-blocks/hero-section',
		'version' => '0.1.0',
		'title' => 'Hero Section',
		'category' => 'layout',
		'icon' => 'cover-image',
		'description' => 'Главный экран: заголовок и подзаголовок.',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'h1'
			),
			'subtitle' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'p'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'event-core-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'testimonial' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'event-core-blocks/testimonial',
		'version' => '0.1.0',
		'title' => 'Testimonial',
		'category' => 'text',
		'icon' => 'format-quote',
		'description' => 'Блок отзыва: фото, текст и автор.',
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'blockquote'
			),
			'author' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'cite'
			),
			'mediaId' => array(
				'type' => 'number'
			),
			'mediaUrl' => array(
				'type' => 'string',
				'default' => 'https://via.placeholder.com/100'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'event-core-blocks',
		'editorScript' => 'file:./index.js'
	),
	'upcoming-events' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'event-core-blocks/upcoming-events',
		'parent' => array(
			'event-core-blocks/agenda-wrapper'
		),
		'version' => '0.1.0',
		'title' => 'Upcoming events',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Block for upcoming events.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'postsToShow' => array(
				'type' => 'number',
				'default' => 3
			)
		),
		'textdomain' => 'event-core-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
