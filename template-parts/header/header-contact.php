<?php $header = get_field( 'header', 'option' ); ?>

<div class="header__navigation--contact">
    <a href="tel:+48<?php echo $header['mobile']; ?>" title="Zadzwoń: <?php echo $header['mobile']; ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tel-icon.png"
             alt="Tel" width="13" height="21">
        <span>+48 <strong><?php echo $header['mobile']; ?></strong></span>
    </a>
    <a href="mailto:<?php echo $header['email']; ?>" title="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-icon.png"
             alt="E-mail" width="20" height="17">
        <span><strong><?php echo $header['email']; ?></strong></span>
    </a>
</div>