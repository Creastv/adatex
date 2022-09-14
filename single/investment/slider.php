<?php
$details = get_field( 'details' );
$slides  = get_field( 'slides' );
?>

<?php if ( ! empty( $slides ) ): ?>
    <div class="section section-slider">
        <i class="line" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"></i>
        <div class="slider-main owl-carousel">
			<?php $i = 1;
			foreach ( $slides as $slide ): ?>
                <div class="slide"
                     style="background-image: url(<?php echo wp_get_attachment_image_url( $slide, 'home-slide-background' ); ?>"
                     data-dot="<button><?php echo sprintf( '%02d', $i );; ?></button>">
                    <div class="container">
                        <div class="section-slider__details">
                            <div>
                                <h2 class="title"><?php echo $details['name']; ?></h2>
                                <p><?php echo $details['address']; ?></p>
                            </div>
                            <div>
                                <a href="#flats-table" title="kliknij i znajdź mieszkanie" class="btn">kliknij i znajdź mieszkanie</a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php $i ++; endforeach; ?>
        </div>
        <div class="slider-main-nav">
            <span></span>
        </div>
        <a href="#flats-table" class="scroll-down">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/scroll-down.png" alt="Scroll Down" width="37" height="80">
            <span>przewiń do dołu</span>
        </a>
    </div>
<?php else : ?> 
   <?php get_template_part('template-parts/section/section', 'header'); ?>
<?php endif; ?>