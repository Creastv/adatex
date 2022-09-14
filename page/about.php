<?php
get_header();

$about    = get_field( 'about' );
$progress = get_field( 'progress' );
$finished = get_field( 'finished' );
$banner   = get_field( 'banner' );
?>

<section id="main" class="page-about">
	<?php get_template_part( 'template-parts/section/section', 'header' ); ?>
    <div id="page-content">
        <div class="page-full__wrapper">
            <div class="page-full__panel left">
                <div class="page-full__background" data-aos="fade-right" data-aos-duration="1000"
                     data-aos-easing="ease-in-sine"></div>
            </div>
            <div class="page-full__panel right">
                <div class="page-full__content">
					<?php if ( ! empty( $about['values'] ) ): ?>
                        <div class="page-about__history">
							<?php $i = 1;
							foreach ( $about['values'] as $value ): ?>
                                <div>
                                    <i class="line" data-aos="fade-down" data-aos-delay="<?php echo $i * 400; ?>"
                                       data-aos-duration="1000"
                                       data-aos-easing="ease-in-sine"></i>
                                    <p class="title"><?php echo $value['value']; ?></p>
                                    <p class="subtitle"><?php echo $value['title']; ?></p>
                                </div>
								<?php $i ++; endforeach; ?>
                        </div>
					<?php endif; ?>
                    <div class="page-about__content">
                        <div class="row">
                            <div class="col-sm-6">
								<?php echo $about['left']; ?>
                            </div>
                            <div class="col-sm-6">
								<?php echo $about['right']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-about__title text-center">
            <div class="container">
                <div class="section-heading">
                    <p class="title"><?php echo $about['title']; ?></p>
                    <p class="subtitle"><?php echo $about['subtitle']; ?></p>
                </div>
            </div>
        </div>

		<?php if ( ! empty( $progress ) ): ?>
            <div class="page-about__experience">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="section-heading">
                                <p class="title"><?php echo $progress['title']; ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="section-content">
                                <div class="page-about__logos">
									<?php foreach ( $progress['investments'] as $investment ): ?>
                                        <div>
                                            <a href="<?php echo $investment['url']; ?>" title="Zobacz inwestycję">
												<?php echo wp_get_attachment_image( $investment['logo'], 'full' ); ?>
                                            </a>
                                        </div>
									<?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endif; ?>

		 <?php if ( ! empty( $finished ) ): ?>
            <div class="page-about__experience">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="section-heading">
                                <p class="title">Inwestycje zrealizowane</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="section-content">
                                <div class="section-content">
                                    <div class="page-about__logos">
										<?php foreach ( $finished['investments'] as $investment ): ?>
                                            <div>
                                                <a href="<?php echo $investment['url']; ?>" title="Zobacz inwestycję">
													<?php echo wp_get_attachment_image( $investment['logo'], 'full' ); ?>
                                                </a>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endif; ?>

		<?php if ( ! empty( $banner ) ): ?>
            <div class="page-about__banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-5">
                            <div class="section-heading">
                                <p class="superscription"><?php echo $banner['superscription']; ?></p>
                                <p class="title"><?php echo $banner['title']; ?></p>
								<?php if ( $banner['button'] ): ?>
                                    <a href="<?php echo $banner['button']['url']; ?>"
                                       title="<?php echo $banner['button']['title']; ?>"
                                       class="btn"><?php echo $banner['button']['title']; ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
