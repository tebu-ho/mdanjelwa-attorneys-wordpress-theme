<?php
/** Custom post types **/
function add_mdanjelwa_custom_post_types()
{
    register_post_type(
        'service', array(
            'public'   => true,
            'supports' => array(
                'title',
                'editor',
            ),
            'labels' => array(
                'name'         => 'Services',
                'add_new_item' => 'Add Service',
                'edit_item'    => 'Edit Service',
                'all_items'    => 'All Services',
                'singular'     => 'Service',
            ),
            'menu_icon' => 'dashicons-portfolio',
        )
    );
    
    /** Register homepage sections **/
    register_post_type(
    'section', array(
        'public'   => true,
        'supports' => array(
            'title',
            'editor',
        ),
        'labels' => array(
            'name'         => 'Homepage Sections',
            'add_new_item' => 'Add Section',
            'edit_item'    => 'Edit Section',
            'all_items'    => 'All Sections',
            'singular'     => 'Section',
        ),
        'menu_icon' => 'dashicons-tag',
    )
    );
    
    /** Register Frequently Asked Questions (imibuzo) custompost type */
    register_post_type(
    'imibuzo', array(
        'public'   => true,
        'supports' => array(
            'title',
            'editor',
        ),
        'labels'   => array(
            'name' => 'Imibuzo',
            'add_new_item' => 'Add Umbuzo',
            'edit_item'    => 'Edit Umbuzo',
            'all_items'    => 'Yonke Imibuzo',
            'singular'     => 'Umbuzo',
        ),
        'menu_icon' => 'dashicons-format-chat',
    )
    );
}
add_action( 'init', 'add_mdanjelwa_custom_post_types');