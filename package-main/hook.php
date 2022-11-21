<?php

add_action( 'admin_enqueue_scripts', 'thenewest_add_admin_scripts', 10, 1 );
function thenewest_add_admin_scripts( $hook ) {
    global $post;

    $terms = get_the_terms($post->ID, 'post_sub');

    //Optional: restirct by post type
    if ( 'post.php' == $hook  && 'post' == $post->post_type && !empty($terms) && $_GET['message'] == 6 ) {
        $permalink = get_the_permalink($post->ID);

        foreach ($terms as $key => $term) {
            if( $key == 1 ){
                break;
            }else{
                $link = get_field('link', $term->taxonomy . '_' . $term->term_id );
                $url = $link .'?slug='. $permalink;

                echo "
                    <script type='text/javascript'>
                        window.open('$url', '_blank');
                    </script>
                    ";
            }
        }
    }
}

add_action('admin_head', 'thenewest_custom_css_admin');
function thenewest_custom_css_admin() {
  echo '<style>
    #post_sub-0{
        display: none !important;
    }
  </style>';
}