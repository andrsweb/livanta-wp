<?php

if( is_page() && is_page_template( 'page-templates/dual361.php' ) )
	get_template_part( 'template-parts/footers/dual361' );  // DUAL361 page template footer.
if( is_page() && is_page_template( 'page-templates/login-member361.php' ) )
	get_template_part( 'template-parts/footers/login-member361' );  // Login MEMBER361 page template footer.
else if( is_page() && is_page_template( 'page-templates/login-empower361.php' ) )
	get_template_part( 'template-parts/footers/login-empower361' ); // Login EMPOWER361 page template footer.
else get_template_part( 'template-parts/footers/default' ); // Default footer.