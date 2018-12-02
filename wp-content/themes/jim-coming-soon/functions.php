<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lancelot', false ); 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato', false ); 


}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


add_action( 'cmb2_admin_init', 'wds_faq_metaboxes' );
 
/**
 * Define the metabox and field configurations.
 */
function wds_faq_metaboxes() {
 
    /**
     * Initiate the metabox!
     */
    $cmb = new_cmb2_box( array(
        'id'           => 'faq_metabox',
        'title'        => __( 'Frequently Asked Questions', 'wds' ),
        'object_types' => array( 'page', ), // Post type
        'show_on'      => array( 'id' => array( 19, ) ), // Uses specific post IDs to display this metabox only on that page
    ) );
 
    //Creates grouping
    $group_field_id = $cmb->add_field( array(
        'id'      => 'qa_group',
        'type'    => 'group',
        'options' => array(
            'group_title'   => __( 'Question {#}', 'wds' ),
            'add_button'    => __( 'Add Another Question', 'wds' ),
            'remove_button' => __( 'Remove Question', 'wds' ),
            'sortable'      => true,
        ),
    ) );
 
    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb->add_group_field( $group_field_id, array(
            'name' => 'Question',
            'id'   => 'question',
            'type' => 'text',
    ) );
 
    $cmb->add_group_field( $group_field_id, array(
            'name' => 'Answer',
            'description' => '',
            'id'   => 'answer',
            'type' => 'textarea_small',
    ) );
}
