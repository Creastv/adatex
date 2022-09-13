<?php
    if ( is_tax( 'encyclopedia_tax' ) ) {
        include(TEMPLATEPATH.'/taxonomy/taxonomy-encyclopedia.php');
    } else {
        include(TEMPLATEPATH.'/taxonomy/default.php');
    }