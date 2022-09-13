<?php

$paged          = $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$posts_per_page = get_option( 'posts_per_page' );
$currentCatId   = get_query_var( 'cat' );

$args = array(
	'post_type'      => 'post',
	'paged'          => $paged,
	'posts_per_page' => $posts_per_page,
	'post_status'    => 'publish',
	'category__in'   => array( $currentCatId )
);

$wp_query = new WP_Query( $args );

?>

<div id="page-content" class="category section">
    <div class="container">
		<?php if ( $wp_query->have_posts() ): ?>
            <div class="row">
				<?php
				while ( $wp_query->have_posts() ) : $wp_query->the_post();
					$world_count = strlen( get_the_title() );
					?>
                    <div class="col-md-6 item">
                        <div class="post__panel">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="post__background"
                                     style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'category-post-thumbnail' ); ?>);">
                                    <span class="post__date"><?php the_time( 'd.m.Y' ); ?></span>
                                    <div class="post__heading">
                                        <p class="title"><?php the_title(); ?></p>
                                        <p class="description"><?php echo mb_strimwidth( wp_strip_all_tags( get_the_content() ), 0, 120, "..." ); ?></p>
                                        <span class="btn">przeczytaj całość</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </div>
</div>