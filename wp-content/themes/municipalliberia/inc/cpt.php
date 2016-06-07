<?php

add_filter( 'rwmb_meta_boxes', 'municipalliberia_register_meta_boxes' );

function municipalliberia_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'informacion_adicional',
        'title'    => 'Foto Jugador',
        'pages'    => array('equipo' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
             array(
                'name'  => 'Foto del Jugador',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'player_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => 'Posición',
                'options' =>array(
                    'Portero' => __( 'Portero', 'your-prefix' ),
                    'Defensa' => __( 'Defensa', 'your-prefix' ),
                    'Mediocampista' => __( 'Mediocampista', 'your-prefix' ),
                    'Delantero' => __( 'Delantero', 'your-prefix' ),
                ),
                'id'    => $prefix . 'player_position',
                'type'  => 'select',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => 'Numero',
                'id'    => $prefix . 'player_number',
                'type'  => 'text',
                'std'   => '',
                'class' => 'custom-class'
                
            )

        )
    );

     // 2st meta box
    $meta_boxes[] = array(
        'id'       => 'ads_content',
        'title'    => 'Anuncios',
        'pages'    => array( 'ads' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
              array(
                'name'  => 'Url',
                'desc'  => 'Format: Url',
                'id'    => $prefix . 'ad_url',
                'type'  => 'url',
                'std'   => '',
                'class' => 'custom-class'
                
            )

        )
    );

      // 3st meta box
    $meta_boxes[] = array(
        'id'       => 'banners_content',
        'title'    => 'Banners',
        'pages'    => array( 'banners' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
             array(
                'name'  => 'Titulo 1',
                'id'    => $prefix . 'banner_titulo_1',
                'type'  => 'text',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => 'Titulo 2',
                'id'    => $prefix . 'banner_titulo_2',
                'type'  => 'text',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => 'Url',
                'desc'  => 'Format: Url',
                'id'    => $prefix . 'banner_url',
                'type'  => 'url',
                'std'   => '',
                'class' => 'custom-class'
                
            )

        )
    );
    


    return $meta_boxes;
}

//custom post type services
function my_custom_post_players() {
  $labels = array(
    'name'               => _x( 'Jugadores', 'post type general name' ),
    'singular_name'      => _x( 'Jugador', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Jugador' ),
    'add_new_item'       => __( 'Add New Jugador' ),
    'edit_item'          => __( 'Edit Jugador' ),
    'new_item'           => __( 'New Jugador' ),
    'all_items'          => __( 'All Jugadores' ),
    'view_item'          => __( 'View Jugador' ),
    'search_items'       => __( 'Search Jugadores' ),
    'not_found'          => __( 'No Jugadores found' ),
    'not_found_in_trash' => __( 'No Jugadores found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Equipo'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our players and player specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'equipo', $args ); 
}
add_action( 'init', 'my_custom_post_players' );

function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['equipo'] = array(
    0 => '', 
    1 => sprintf( __('Jugador updated. <a href="%s">View Jugador</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Jugador updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Jugador restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Jugador published. <a href="%s">View Jugador</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Jugador saved.'),
    8 => sprintf( __('Jugador submitted. <a target="_blank" href="%s">Preview Jugador</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Jugador scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Jugador</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Jugador draft updated. <a target="_blank" href="%s">Preview Jugador</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );



//custom post type services
function my_custom_post_ads() {
  $labels = array(
    'name'               => _x( 'Anuncios', 'post type general name' ),
    'singular_name'      => _x( 'Anuncio', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Anuncio' ),
    'edit_item'          => __( 'Edit Anuncio' ),
    'new_item'           => __( 'New Anuncio' ),
    'all_items'          => __( 'All ads' ),
    'view_item'          => __( 'View Anuncio' ),
    'search_items'       => __( 'Search Anuncios' ),
    'not_found'          => __( 'No anuncios found' ),
    'not_found_in_trash' => __( 'No Anuncios found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Anuncios'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Ads and Ad specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'ads', $args ); 
}
add_action( 'init', 'my_custom_post_ads' );

function my_updated_messages_ads( $messages ) {
  global $post, $post_ID;
  $messages['ads'] = array(
    0 => '', 
    1 => sprintf( __('Anuncio updated. <a href="%s">View Anuncio</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Anuncio updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Anuncio published. <a href="%s">View Anuncio</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Anuncio saved.'),
    8 => sprintf( __('Anuncio submitted. <a target="_blank" href="%s">Preview Anuncio</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Anuncio scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Anuncio</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Anuncio draft updated. <a target="_blank" href="%s">Preview Anuncio</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages_ads' );

//custom post type services
function my_custom_post_banners() {
  $labels = array(
    'name'               => _x( 'Banners', 'post type general name' ),
    'singular_name'      => _x( 'Banner', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'banner' ),
    'add_new_item'       => __( 'Add New Banner' ),
    'edit_item'          => __( 'Edit Banner' ),
    'new_item'           => __( 'New Banner' ),
    'all_items'          => __( 'All ads' ),
    'view_item'          => __( 'View Banner' ),
    'search_items'       => __( 'Search Banners' ),
    'not_found'          => __( 'No Banners found' ),
    'not_found_in_trash' => __( 'No Banners found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Banners'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Ads and Ad specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
  );
  register_post_type( 'banners', $args ); 
}
add_action( 'init', 'my_custom_post_banners' );

function my_updated_messages_banners( $messages ) {
  global $post, $post_ID;
  $messages['ads'] = array(
    0 => '', 
    1 => sprintf( __('Anuncio updated. <a href="%s">View Banner</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Banner updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Banner published. <a href="%s">View Banner</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Banner saved.'),
    8 => sprintf( __('Banner submitted. <a target="_blank" href="%s">Preview Banner</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Banner scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Banner</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Banner draft updated. <a target="_blank" href="%s">Preview Banner</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages_banners' );

/*function my_taxonomies_products() {
  $labels = array(
    'name'              => _x( 'Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Product Categories' ),
    'all_items'         => __( 'All Product Categories' ),
    'parent_item'       => __( 'Parent Product Category' ),
    'parent_item_colon' => __( 'Parent Product Category:' ),
    'edit_item'         => __( 'Edit Product Category' ), 
    'update_item'       => __( 'Update Product Category' ),
    'add_new_item'      => __( 'Add New Product Category' ),
    'new_item_name'     => __( 'New Product category' ),
    'menu_name'         => __( 'Product Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'category_product', 'products', $args );
}
add_action( 'init', 'my_taxonomies_products', 0 );
*/