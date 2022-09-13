<?php $footer = get_field( 'footer', 'option' ); ?>

<div class="section-form">
    <div class="section-form__contact">
        <div class="section-form__details">
            <div class="section-heading">
                <p class="superscription"><?php echo $footer['aside']['superscription']; ?></p>
                <p class="title"><?php echo $footer['aside']['title']; ?></p>
            </div>
            <div class="section-form__details--address">
				<?php echo $footer['aside']['address']; ?>
            </div>
            <div class="section-form__details--state">
				<?php foreach ( $footer['aside']['contact'] as $contact ): ?>
                    <div>
                        <p class="title"><?php echo $contact['state']; ?></p>
                        <div class="group">
                            <a href="tel:+48<?php echo $contact['phone']; ?>" title="Zadzwoń do nas: +48 <?php echo $contact['phone']; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-dark-icon.png"
                                     alt="Mobile Dark" width="14" height="23">
                                <span><?php echo $contact['phone']; ?></span>
                            </a>
                            <a href="mailto:<?php echo $contact['email']; ?>" title="Napisz do nas: <?php echo $contact['email']; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-dark-icon.png"
                                     alt="E-mail Dark" width="22" height="18">
                                <span><?php echo $contact['email']; ?></span>
                            </a>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="section-form__navigation">
        <div class="section-form__meta">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-medium-icon.png"
                         alt="Mobile medium" width="22" height="35">
                    <a href="tel:+48<?php echo $footer['contact']['phone']; ?>" title="Zadzwoń do nas: +48 <?php echo $footer['contact']['phone']; ?>"><span>+48</span> <?php echo $footer['contact']['phone']; ?></a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-medium-icon.png"
                         alt="Email medium" width="34" height="28">
                    <a href="mailto:<?php echo $footer['contact']['email']; ?>" title="Napisz do nas: <?php echo $footer['contact']['email']; ?>"><?php echo $footer['contact']['email']; ?></a>
                </li>
                <li>
                    <a href="<?php echo $footer['contact']['instagram']; ?>" title="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/insta-medium-icon.png"
                             alt="Instagram medium" width="30" height="30">
                    </a>
                    <a href="<?php echo $footer['contact']['facebook']; ?>" title="Faceook">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb-medium-icon.png"
                             alt="Facebook medium" width="16" height="30">
                    </a>
                </li>
            </ul>
        </div>
        <div class="section-form__menus">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-form__cform">
                        <div class="section-heading">
                            <p class="title"><span>Masz pytania?</span> Napisz do nas</p>
                        </div>
						<?php echo do_shortcode( '[contact-form-7 id="3944" title="Formularz kontaktowy"]' ); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-form__logo">
                        <a href="<?php site_url(); ?>" title="<?php bloginfo( 'description' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adatex-medium-logo.png"
                                 alt="Adatex Logo" width="269" height="58">
                        </a>
                    </div>
                    <div class="section-form__navs">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="section-form__menu">
	                                <?php
	                                $defaults = array(
		                                'theme_location'  => 'left-menu',
		                                'menu'            => 'Lewe menu',
		                                'container_class' => '',
		                                'container_id'    => '',
		                                'menu_class'      => 'menu',
		                                'menu_id'         => '',
		                                'echo'            => true,
		                                'fallback_cb'     => 'wp_page_menu',
		                                'before'          => '',
		                                'after'           => '',
		                                'link_before'     => '',
		                                'link_after'      => '',
		                                'items_wrap'      => '<ul>%3$s</ul>',
		                                'depth'           => 0,
		                                'walker'          => ''
	                                );
	                                wp_nav_menu( $defaults );
	                                ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="section-form__menu">
	                                <?php
	                                $defaults = array(
		                                'theme_location'  => 'right-menu',
		                                'menu'            => 'Prawe menu',
		                                'container_class' => '',
		                                'container_id'    => '',
		                                'menu_class'      => 'menu',
		                                'menu_id'         => '',
		                                'echo'            => true,
		                                'fallback_cb'     => 'wp_page_menu',
		                                'before'          => '',
		                                'after'           => '',
		                                'link_before'     => '',
		                                'link_after'      => '',
		                                'items_wrap'      => '<ul>%3$s</ul>',
		                                'depth'           => 0,
		                                'walker'          => ''
	                                );
	                                wp_nav_menu( $defaults );
	                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>