<?php $contact = get_field( 'contact', 'option' ); ?>

<div class="section section-contact">
    <div class="container">
        <div class="section-contact__wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="section-contact__meet">
                        <span><?php echo $contact['superscription']; ?></span>
                        <p><?php echo $contact['title']; ?></p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="section-contact__phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mobile-contact-icon.png"
                             alt="Mobile Icon" width="45" height="69">
                        <a href="tel:+48<?php echo $contact['mobile']; ?>" title="Zadzwoń: +48 <?php echo $contact['mobile']; ?>"><span>+48</span> <?php echo $contact['mobile']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>