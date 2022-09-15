<?php get_header(); ?>
<section id="main" class="category">
    <?php get_template_part('template-parts/section/section', 'header');?>
<div id="page-content" class="category section">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
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
                <?php if(paginate_links()) { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="pagination">
                                    <?php pagination_bars(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                <?php } ?> 
            <?php else : ?>
            <h2> Nic nie znaleziono</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
