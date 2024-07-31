<?php

if ( is_page() && ( is_page_template( 'page-templates/dual361.php' ) || is_page_template( 'page-templates/dual361-blog.php' ) ) ) {
    get_template_part( 'template-parts/headers/dual361' );  // DUAL361 page template header.
} elseif ( is_page() && is_page_template( 'page-templates/login-member361.php' ) ) {
    get_template_part( 'template-parts/headers/login-member361' );  // Login MEMBER361 page template header.
} elseif ( is_page() && is_page_template( 'page-templates/login-empower361.php' ) ) {
    get_template_part( 'template-parts/headers/login-empower361' ); // Login EMPOWER361 page template header.
} else {
    get_template_part( 'template-parts/headers/default' ); // Default header.
}
