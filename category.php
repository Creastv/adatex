<?php get_header(); ?>
<section id="main" class="category">
    <?php
    get_template_part('template-parts/section/section', 'header');
    get_template_part('category/category', 'posts');
    ?>
</section>
<?php get_footer(); ?>
