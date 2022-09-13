<?php
    define( 'ADATEX_THEME_DIRECTORY', get_template_directory() );
    define( 'ADATEX_DIRECTORY_URI', get_template_directory_uri() );

	require_once get_template_directory() . '/functions/general.php';
    require_once get_template_directory() . '/functions/enqueue-styles.php';
    require_once get_template_directory() . '/functions/enqueue-scripts.php';
    require_once get_template_directory() . '/functions/post-types.php';