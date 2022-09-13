<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_styles() {
	wp_register_style( 'adatex-grid-system', ADATEX_DIRECTORY_URI . '/assets/css/grid.css', '', '1.0' );
	wp_register_style( 'adatex-main-styles', ADATEX_DIRECTORY_URI . '/assets/css/styles.css', '', '1.0' );
	wp_register_style( 'adatex-component-carousel', ADATEX_DIRECTORY_URI . '/assets/css/component/owl.carousel.min.css', '', '4.0' );
	wp_register_style( 'adatex-component-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', '', '4.0' );
	wp_register_style( 'adatex-component-aos', ADATEX_DIRECTORY_URI . '/assets/css/component/jquery.aos.css', '', '2.3.1' );
	wp_register_style( 'adatex-component-range-slider', ADATEX_DIRECTORY_URI . '/assets/css/component/ion.rangeSlider.min.css', '', '2.3.1' );

	wp_register_style( 'adatex-section-contact', ADATEX_DIRECTORY_URI . '/assets/css/section/contact.css', '', '1.0' );
	wp_register_style( 'adatex-section-post-slider', ADATEX_DIRECTORY_URI . '/assets/css/section/post-slider.css', '', '1.0' );
	wp_register_style( 'adatex-section-form', ADATEX_DIRECTORY_URI . '/assets/css/section/form.css', '', '1.0' );
	wp_register_style( 'adatex-section-slider', ADATEX_DIRECTORY_URI . '/assets/css/section/slider.css', '', '1.0' );

	wp_register_style( 'adatex-page-home', ADATEX_DIRECTORY_URI . '/assets/css/page/home.css', '', '1.0' );
	wp_register_style( 'adatex-page-cooperation', ADATEX_DIRECTORY_URI . '/assets/css/page/cooperation.css', '', '1.0' );
	wp_register_style( 'adatex-page-about', ADATEX_DIRECTORY_URI . '/assets/css/page/about.css', '', '1.0' );
	wp_register_style( 'adatex-page-contact', ADATEX_DIRECTORY_URI . '/assets/css/page/contact.css', '', '1.0' );
	wp_register_style( 'adatex-page-default', ADATEX_DIRECTORY_URI . '/assets/css/page/default.css', '', '1.0' );

	wp_register_style( 'adatex-archive-category', ADATEX_DIRECTORY_URI . '/assets/css/archive/category.css', '', '1.0' );

	wp_register_style( 'adatex-single-gallery', ADATEX_DIRECTORY_URI . '/assets/css/single/gallery.css', '', '1.0' );
	wp_register_style( 'adatex-single-investment', ADATEX_DIRECTORY_URI . '/assets/css/single/investment.css', '', '1.0' );

	wp_enqueue_style( 'adatex-data-tables', 'https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css', '', '1.10.16' );
	wp_enqueue_style( 'adatex-data-tables-responsive', 'https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css', '', '2.2.3' );;

	wp_enqueue_style( 'adatex-grid-system' );
	wp_enqueue_style( 'adatex-section-form' );
	wp_enqueue_style( 'adatex-page-default' );
	wp_enqueue_style( 'adatex-component-aos' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	if ( is_page( 2 ) ) {
		wp_enqueue_style( 'adatex-component-carousel' );
		wp_enqueue_style( 'adatex-section-slider' );
		wp_enqueue_style( 'adatex-section-contact' );
		wp_enqueue_style( 'adatex-section-post-slider' );
		wp_enqueue_style( 'adatex-page-home' );
		wp_dequeue_style( 'adatex-page-default' );
	}

	if ( is_page( 3976 ) ) {
		wp_enqueue_style( 'adatex-page-cooperation' );
	}

	if ( is_page( 3978 ) ) {
		wp_enqueue_style( 'adatex-page-about' );
	}

	if ( is_page( 3983 ) ) {
		wp_enqueue_style( 'adatex-page-contact' );
	}

	if ( is_category() ) {
		wp_enqueue_style( 'adatex-archive-category' );
	}

	if ( is_singular( 'galleries' ) ) {
		wp_enqueue_style( 'adatex-component-fancybox' );
		wp_enqueue_style( 'adatex-single-gallery' );
	}

	if ( is_singular( 'investment' ) ) {
		wp_enqueue_style( 'adatex-component-carousel' );
		wp_enqueue_style( 'adatex-component-fancybox' );
		wp_enqueue_style( 'adatex-section-slider' );
		wp_enqueue_style( 'adatex-section-contact' );
		wp_enqueue_style( 'adatex-single-investment' );
		wp_enqueue_style( 'adatex-data-tables' );
		wp_enqueue_style( 'adatex-data-tables-responsive' );
		wp_enqueue_style( 'adatex-component-range-slider' );
	}
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );