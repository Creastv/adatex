<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader">
    <div class="logo-pre">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adatex-logo.png"
		     alt="Adatex Logo">
    </div>
</div>
<header id="header">
    <div class="container">
        <div class="header__wrapper">
			<?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
            <div class="header__navigation">
				<?php
				get_template_part( 'template-parts/header/header', 'contact' );
				get_template_part( 'template-parts/header/header', 'social' );
				?>
				<div class="header__navigation--hamburger">
                <i></i>
                <span>Menu</span>
            </div>
            </div>
        </div>
    </div>
	<?php get_template_part( 'template-parts/header/header', 'menu' ); ?>
</header>