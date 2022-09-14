<?php
get_header();

$company = get_field( 'company' );
$editor  = get_field( 'editor' );
$sales   = get_field( 'sales' );

?>
<section id="main" class="page-contact">
	<?php get_template_part( 'template-parts/section/section', 'header' ); ?>
    <div id="page-content">
        <div class="page-contact__main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="page-contact__address">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adatex-slogan.png"
                                 alt="Adatex slogan" width="157" height="109" data-aos="fade-right"
                                 data-aos-duration="1000">
                            <div>
                                <p class="title"><?php echo $company['brand']; ?></p>
                                <address><?php echo $company['address']; ?></address>
                                <p>REGON: <?php echo $company['regon']; ?></p>
                                <p>NIP: <?php echo $company['nip']; ?></p>
                                <p>KRS: <?php echo $company['krs']; ?></p>
                                <a href="<?php echo $company['button']['url']; ?>"
                                   title="<?php echo $company['button']['url']; ?>"
                                   class="btn"><?php echo $company['button']['title']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="page-contact__form">
                            <p class="title">Chcesz, żebyśmy oddzwonili lub napisali?</p>
                            <p class="subtitle">Wpisz numer telefonu oraz / lub adres email - odezwiemy się w przeciągu
                                24 godzin!</p>
							<?php echo do_shortcode( '[contact-form-7 id="3987" title="Formularz - Strona kontakt"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-contact__welcome">
            <i class="line" data-aos="zoom-out-right" data-aos-duration="1000" data-aos-easing="ease-in-sine"></i>
            <div class="container">
                <div class="page-contact__welcome-content">
					<?php echo $editor; ?>
                </div>
            </div>
        </div>
        <div class="page-contact__team">
            <div class="container">
                <div class="page-contact__team-state">
                    <div class="section-heading">
                        <p class="title"><?php echo $sales['title']; ?></p>
                    </div>
                    <div class="section-content">
						<?php foreach ( $sales['states'] as $state ): ?>
                            <div>
                                <div class="state">
                                    <span>województwo</span>
                                    <p><?php echo $state['name']; ?></p>
                                </div>
                                <div class="mobile">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-contact-icon.png"
                                         alt="Mobile medium" width="45" height="69">
                                    <a href="tel:+48 530 717 718"
                                       title="Zadzwoń do nas: +48 530 717 718"><span>+48</span>
										<?php echo $state['mobile']; ?></a>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
                <div class="page-contact__team-persons">
                    <div class="row">
						<?php foreach ( $sales['personels'] as $person ): ?>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="page-contact__team-item">
                                    <div class="page-contact__team-featured">
                                        <span class="state">woj. <?php echo $person['state'] === "1" ? 'śląskie' : 'mazowieckie'; ?></span>
                                        <?php echo wp_get_attachment_image($person['avatar'], 'contact-person-thumbnail'); ?>
                                    </div>
                                    <div class="page-contact__team-content">
                                        <p class="title"><?php echo $person['name']; ?></p>
                                        <ul>
                                            <li>
                                                <div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-medium-icon.png"
                                                         alt="Mobile medium" width="22" height="35">
                                                </div>
                                                <a href="tel:+48 <?php echo $person['mobile']; ?>"
                                                   title="Zadzwoń do nas: +48 530 717 718"><span>+48</span> <?php echo $person['mobile']; ?></a>
                                            </li>
                                            <li>
                                                <div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-medium-icon.png"
                                                         alt="Email medium" width="34" height="28">
                                                </div>
                                                <a href="mailto:<?php echo $person['email']; ?>" title="Napisz do nas: biuro@adatex.pl"><?php echo $person['email']; ?></a>
                                            </li>
                                        </ul>
                                        <a href="mailto:<?php echo $person['email']; ?>" title="Napisz do nas: biuro@adatex.pl" class="btn">kliknij, aby napisać wiadomość</a>
                                    </div>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
