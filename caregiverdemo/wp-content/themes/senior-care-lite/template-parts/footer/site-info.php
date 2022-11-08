<?php
/**
 * Displays footer site info
 *
 * @subpackage Senior Care Lite
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">

    <?php
        echo esc_html( get_theme_mod( 'senior_care_lite_footer_text' ) );
        printf(
            /* translators: %s: Senior Care WordPress Theme. */
            '<a target="_blank" href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-senior-care-wordpress-theme/', 'senior-care-lite' ) . '"> %s</a>',
            esc_html__( 'Senior Care WordPress Theme', 'senior-care-lite' )
        );
    ?>

</div>