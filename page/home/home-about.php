<?php $about = get_field( 'about' ); ?>

<?php if ( ! empty( $about ) ): ?>
    <div class="section section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="section-about__finder">
                        <div class="section-heading">
                            <p class="superscription"><?php echo $about['aside']['superscription']; ?></p>
                            <p class="title"><?php echo $about['aside']['title']; ?></p>
                        </div>
                        <div>
                            <a href="<?php echo $about['aside']['button']['url']; ?>"
                               title="<?php echo $about['aside']['button']['title']; ?>"
                               class="btn"><?php echo $about['aside']['button']['title']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                    <div class="section-about__content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-5">
                                <div class="section-about__trust">
                                    <a href="<?php site_url(); ?>" title="<?php bloginfo( 'description' ); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adatex-logo-dark.png"
                                             alt="Adatex Logo">
                                    </a>
                                    <p class="title"><?php echo $about['title']; ?></p>
                                    <div class="area">
                                        <span><?php echo $about['area']; ?> m<sup>2</sup></span>
                                        <p><?php echo $about['areaDescription']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-7">
                                <div class="section-about__description">
	                                <?php echo $about['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>