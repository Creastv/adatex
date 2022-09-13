<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header">
    <div class="container">
        <div class="header__wrapper">
			<?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
            <div class="header__navigation">
				<?php
				get_template_part( 'template-parts/header/header', 'contact' );
				get_template_part( 'template-parts/header/header', 'social' );
				?>
            </div>
        </div>
    </div>
	<?php get_template_part( 'template-parts/header/header', 'menu' ); ?>
</header>