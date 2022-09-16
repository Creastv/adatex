<?php get_template_part( 'template-parts/section/section', 'form' ); ?>
<footer id="footer">
    <div class="container">
        <div class="row ">
            <div class="col-sm-6">
                <div class="footer__copyright">
                    <p>All Rights Reserved Adatex Sp. z o.o.</p>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="footer__design">
                    <p>Projekt i realizacja:</p>
                    <a href="https://regalestate.pl/" title="RegalEstate" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-regalestate.png"
                             alt="Regal Estate" width="100" height="34">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>


</body>
</html>