<?php
function testTaskScripts() {
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js');
}
function plazaTv_style() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css');
}
add_action( 'init', 'customPostTestTast' );
function customPostTestTast() {
    $args = array(
        'public' => true,
        'label'  => 'testPostType',
        'has_archive'  => true,
        'rewrite'  => array( 'slug' => 'testPostTypes' ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        ),
    );
    register_post_type( 'course', $args );
}
add_action( 'init', 'taxonomiesCustomPOstType' );
function taxonomiesCustomPOstType() {
    register_taxonomy_for_object_type( 'category', 'course' );
    register_taxonomy_for_object_type( 'difficulty', 'course' );
    register_taxonomy_for_object_type( 'post_tag', 'course' );
}
?>