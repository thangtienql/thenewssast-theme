<?php
// add_action( 'transition_post_status', 'wpse120996_generic_post_status_transition', 10, 3 );
// function wpse120996_generic_post_status_transition( $new_status, $old_status, $post ) { 
//     if ( $new_status == 'publish' && $old_status == 'auto-draft' ) {
//         echo "
//          <script type='text/javascript'>
//             console.log('ok');
//             window.open('abc.com', '_blank');
//        </script>
//         ";
//     }
// }

add_action( 'admin_enqueue_scripts', 'wpse50770_add_admin_scripts', 10, 1 );
function wpse50770_add_admin_scripts( $hook ) {
    global $post;
    // print_r($hook);
    print_r($_GET['message']);

    //Only need to enque script on the post.php page
    //Optional: restirct by post type
    if ( 'post.php' == $hook  && 'post' == $post->post_type && $_GET['message'] == 6 ) {
        $permalink = get_the_permalink($post->ID);
        
        $url = 'https://www.test.com?slug='. $permalink;
        echo $url;
        echo "
        <script type='text/javascript'>
            console.log('ok');
            window.open('$url', '_blank');
        </script>
        ";

    }
}