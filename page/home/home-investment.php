<?php
$investment = get_field( 'investment' );

$relationship = $investment['relationship'];

$args  = array(
	'post_type'      => 'investment',
	'posts_per_page' => - 1,
	'include'        => $relationship,
	'order'          => 'desc',
	'orderby'        => 'post__in',
);
$posts = get_posts( $args );
?>
<div class="section section-investment">
    <div class="section-investment__panel left">
        <div class="container section-investment__wrapper">
            <div class="row">
                <div class="col-xl-6 ">
                    <div class="section-investment__article">
                        <div class="section-heading">
                            <p class="title"><?php echo $investment['title']; ?></p>
                        </div>
                        <div class="section-content">
                            <p><?php echo $investment['content']; ?></p>
							<?php if ( ! empty( $investment['button'] ) ): ?>
                                <a href="<?php echo $investment['button']['url']; ?>"
                                   title="<?php echo $investment['button']['title']; ?>"
                                   class="btn"><?php echo $investment['button']['title']; ?></a>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ">
                    <div class="section-investment__nav">
                        <div class="slider-investment-nav"></div>
                    </div>
                    <div class="section-investment__contact">
                        <a href="<?php echo get_the_permalink( 3983 ); ?>"
                           title="Kliknij tutaj, aby wysłać nam swoje pytanie">
                            <span>Kliknij tutaj, aby wysłać nam swoje pytanie</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/contact-icon.png"
                                 alt="Contact" width="70" height="68">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-investment__panel right">
        <div class="slider-investment owl-carousel">
			<?php
			foreach ( $posts as $post ):
				$details = get_field( 'details', $post->ID );
				?>
                <div class="section-investment__slide"
                     data-dot="<button><?php echo $post->post_title; ?> <span><?php echo $details['address']; ?></span></button>">
                    <div class="section-investment__background"
                         style="background-image: url(<?php echo wp_get_attachment_image_url( $details['featured'], 'home-investment-slide' ); ?>)"></div>
                    <div class="section-investment__details">
                        <a href="<?php echo get_the_permalink( $post->ID ); ?>" title="<?php echo $post->post_title; ?>"
                           class="more">
                            <i></i>
                        </a>
                        <p class="title"><?php echo $post->post_title; ?></p>
						<?php if ( ! empty( $details['attributes'] ) ): ?>
                            <div class="section-investment__attributes">
								<?php foreach ( $details['attributes'] as $attribute ): ?>
                                    <div class="section-investment__attributes--item">
										<?php echo wp_get_attachment_image( $attribute['icon'], 'full' ); ?>
                                        <p><?php echo $attribute['name']; ?></p>
                                    </div>
								<?php endforeach; ?>
                            </div>
						<?php endif; ?>
						<?php echo $details['content']; ?>
                    </div>
                </div>
			<?php endforeach;
			wp_reset_postdata(); ?>
        </div>
    </div>
</div>