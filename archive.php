<?php
    if ( is_post_type_archive( 'investment' ) ) {
        include(TEMPLATEPATH . '/archive/investment.php');
    } else if ( is_post_type_archive( 'offer' ) ) {
        include(TEMPLATEPATH.'/archive/offer.php');
    } else {
        include(TEMPLATEPATH.'/archive/default.php');
    }
