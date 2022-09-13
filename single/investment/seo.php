<?php
$title = get_field( 'editorTitle' );
$editor = get_field( 'editor' );
?>

<?php if ( ! empty( $editor ) ): ?>
    <div class="section section-seo">
        <div class="container">
            <div class="section-heading has-line">
                <i class="line"
                   data-aos="fade-down"
                   data-aos-delay="400"
                   data-aos-duration="1000"
                   data-aos-easing="ease-in-sine"
                ></i>
                <h2 class="title">
                    <?php echo $title; ?>
                </h2>
            </div>
            <div class="section-content">
				<?php echo $editor; ?>
            </div>
        </div>
    </div>
<?php endif; ?>