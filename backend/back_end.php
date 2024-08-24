<?php
function wpmtips5s_init() {
    // $labels = array(
    //     'name'                  => _x( 'Recipes', 'Post type general name', 'recipe' ),
    //     'singular_name'         => _x( 'Recipe', 'Post type singular name', 'recipe' ),
    //     'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'recipe' ),
    //     'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'recipe' ),
    //     'add_new'               => __( 'Add New', 'recipe' ),
    //     'add_new_item'          => __( 'Add New recipe', 'recipe' ),
    //     'new_item'              => __( 'New recipe', 'recipe' ),
    //     'edit_item'             => __( 'Edit recipe', 'recipe' ),
    //     'view_item'             => __( 'View recipe', 'recipe' ),
    //     'all_items'             => __( 'All recipes', 'recipe' ),
    //     'search_items'          => __( 'Search recipes', 'recipe' ),
    //     'parent_item_colon'     => __( 'Parent recipes:', 'recipe' ),
    //     'not_found'             => __( 'No recipes found.', 'recipe' ),
    //     'not_found_in_trash'    => __( 'No recipes found in Trash.', 'recipe' ),
    //     'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),
    //     'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe' ),
    //     'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe' ),
    //     'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe' ),
    //     'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe' ),
    //     'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe' ),
    //     'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe' ),
    //     'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe' ),
    //     'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe' ),
    //     'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe' ),
    // );     
    // $args = array(
    //     'labels'             => $labels,
    //     'description'        => 'Recipe custom post type.',
    //     'public'             => true,
    //     'publicly_queryable' => true,
    //     'show_ui'            => true,
    //     'show_in_menu'       => true,
    //     'query_var'          => true,
    //     'rewrite'            => array( 'slug' => 'recipe' ),
    //     'capability_type'    => 'post',
    //     'has_archive'        => true,
    //     'hierarchical'       => false,
    //     'menu_position'      => 20,
    //     'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    //     'taxonomies'         => array( 'category', 'post_tag' ),
    //     'show_in_rest'       => true
    // );
     
    // register_post_type( 'Recipe', $args );


    //----------------taxonomy
    // $labels_dv = array(
    //     'name'                  => _x( 'PageRecipe', 'Taxonomy plural name', 'text-domain' ),
    //     'singular_name'         => _x( 'PageRecipe', 'Taxonomy singular name', 'text-domain' ),
    //     'search_items'          => __( 'Search Plural Name', 'text-domain' ),
    //     'popular_items'         => __( 'Popular Plural Name', 'text-domain' ),
    //     'all_items'             => __( 'All Plural Name', 'text-domain' ),
    //     'parent_item'           => __( 'Parent Singular Name', 'text-domain' ),
    //     'parent_item_colon'     => __( 'Parent Singular Name', 'text-domain' ),
    //     'edit_item'             => __( 'Edit Singular Name', 'text-domain' ),
    //     'update_item'           => __( 'Update Singular Name', 'text-domain' ),
    //     'add_new_item'          => __( 'Add New Singular Name', 'text-domain' ),
    //     'new_item_name'         => __( 'New Singular Name Name', 'text-domain' ),
    //     'add_or_remove_items'   => __( 'Add or remove Plural Name', 'text-domain' ),
    //     'choose_from_most_used' => __( 'Choose from most used Plural Name', 'text-domain' ),
    //     'menu_name'             => __( 'PageRecipe', 'text-domain' ),
    // );
    // $args_dich_vu = array(
    //     'labels'            => $labels_dv,
    //     'public'            => true,
    //     'show_in_nav_menus' => true,
    //     'show_admin_column' => false,
    //     'hierarchical'      => false,
    //     'show_tagcloud'     => true,
    //     'show_ui'           => true,
    //     'query_var'         => true,
    //     'rewrite'           => array('slug' => 'page-recipe'),
    //     'query_var'         => true,
    //     'capabilities'      => array(),
    // );
    // register_taxonomy( 'Recipe_Page', array( 'wpmtips5s-recipe' ), $args_dich_vu );


    $labels = array(
        'name'               => __( 'Dịch vụ', 'text-domain' ),
        'singular_name'      => __( 'Dịch vụ', 'text-domain' ),
        'add_new'            => _x( 'Add New Dịch vụ', 'text-domain', 'text-domain' ),
        'add_new_item'       => __( 'Add New Dịch vụ', 'text-domain' ),
        'edit_item'          => __( 'Edit Dịch vụ', 'text-domain' ),
        'new_item'           => __( 'New Dịch vụ', 'text-domain' ),
        'view_item'          => __( 'View Dịch vụ', 'text-domain' ),
        'search_items'       => __( 'Search Dịch vụ', 'text-domain' ),
        'not_found'          => __( 'Không tìm thấy Dịch vụ', 'text-domain' ),
        'not_found_in_trash' => __( 'Không tìm thấy Dịch vụ', 'text-domain' ),
        'parent_item_colon'  => __( '', 'text-domain' ),
        'menu_name'          => __( 'Dịch vụ', 'text-domain' ),
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array('dmdv'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-embed-audio',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array('slug' => 'dich-vu' ),
        'capability_type'     => 'post',
        'supports'            => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'trackbacks',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
    );
    register_post_type( 'wpshare247-dich-vu', $args );
    //----------------taxonomy
    $labels_dv = array(
        'name'                  => _x( 'Danh mục dv', 'Taxonomy plural name', 'text-domain' ),
        'singular_name'         => _x( 'Danh mục dv', 'Taxonomy singular name', 'text-domain' ),
        'search_items'          => __( 'Search Plural Name', 'text-domain' ),
        'popular_items'         => __( 'Popular Plural Name', 'text-domain' ),
        'all_items'             => __( 'All Plural Name', 'text-domain' ),
        'parent_item'           => __( 'Parent Singular Name', 'text-domain' ),
        'parent_item_colon'     => __( 'Parent Singular Name', 'text-domain' ),
        'edit_item'             => __( 'Edit Singular Name', 'text-domain' ),
        'update_item'           => __( 'Update Singular Name', 'text-domain' ),
        'add_new_item'          => __( 'Add New Singular Name', 'text-domain' ),
        'new_item_name'         => __( 'New Singular Name Name', 'text-domain' ),
        'add_or_remove_items'   => __( 'Add or remove Plural Name', 'text-domain' ),
        'choose_from_most_used' => __( 'Choose from most used Plural Name', 'text-domain' ),
        'menu_name'             => __( 'Danh mục dv', 'text-domain' ),
    );
    $args_dich_vu = array(
        'labels'            => $labels_dv,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => false,
        'hierarchical'      => false,
        'show_tagcloud'     => true,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'danh-muc-dich-vu'),
        'query_var'         => true,
        'capabilities'      => array(),
    );
    register_taxonomy( 'tax-dich-vu', array( 'wpshare247-dich-vu' ), $args_dich_vu );

}

add_action( 'init', 'wpmtips5s_init' );



# Tạo 1 giá trong bài viết dịch vụ

function my_custom_meta_box() {
    add_meta_box(
        'my_meta_box_id',         // ID của MetaBox
        'Cập nhật giá sản phẩm',  // Tiêu đề của MetaBox
        'my_meta_box_callback',   // Hàm hiển thị nội dung của MetaBox
        'wpshare247-dich-vu',                   // Post type mà MetaBox này được thêm vào (ở đây là 'post')
        'normal',                 // Vị trí hiển thị của MetaBox ('normal', 'side', 'advanced')
        'high'                    // Mức độ ưu tiên của MetaBox ('high', 'low')
    );
}
add_action('add_meta_boxes', 'my_custom_meta_box');


function my_meta_box_callback($post) {
    // Tạo nonce field để bảo vệ dữ liệu
    wp_nonce_field('save_meta_box_data', 'my_meta_box_nonce');

    // Lấy giá trị hiện tại của giá (nếu có)
    $value = get_post_meta($post->ID, '_my_meta_key', true);

    // Hiển thị trường nhập liệu để người dùng nhập giá
    echo '<label for="my_meta_field">Giá sản phẩm:</label>';
    echo '<input type="number" id="my_meta_field" name="my_meta_field" value="' . esc_attr($value) . '" />';
}


function save_my_meta_box_data($post_id) {
    // Kiểm tra nếu nonce không hợp lệ
    if (!isset($_POST['my_meta_box_nonce']) || !wp_verify_nonce($_POST['my_meta_box_nonce'], 'save_meta_box_data')) {
        return;
    }

    // Kiểm tra nếu đây là một autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Kiểm tra quyền của người dùng
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Kiểm tra và lưu giá trị của trường nhập liệu
    if (isset($_POST['my_meta_field'])) {
        $my_data = sanitize_text_field($_POST['my_meta_field']);
        update_post_meta($post_id, '_my_meta_key', $my_data);
    }
}
add_action('save_post', 'save_my_meta_box_data');






// function add_price_column_to_post_list($columns) {
//     $columns['product_price'] = 'Giá sản phẩm'; // Thêm cột mới với tiêu đề là "Giá sản phẩm"
//     return $columns;
// }
// add_filter('manage_posts_columns', 'add_price_column_to_post_list');

function add_price_column_to_post_list($columns) {
    $columns['product_price'] = __('Giá sản phẩm');
    return $columns;
}
add_filter('manage_posts_columns', 'add_price_column_to_post_list');

function make_price_column_sortable($columns) {
    $columns['product_price'] = 'product_price'; // Cho phép sắp xếp theo cột giá
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'make_price_column_sortable');





function show_price_column_in_post_list($column, $post_id) {
    if ($column == 'product_price') {
        $price = get_post_meta($post_id, '_my_meta_key', true); // Lấy giá trị giá từ custom field
        if ($price) {
            echo esc_html($price) . ' đ'; // Hiển thị giá trị giá (có thể thêm 'đ' để biểu thị đơn vị tiền)
        } else {
            echo 'Chưa có giá'; // Hiển thị nếu chưa có giá trị
        }
    }
}
add_action('manage_posts_custom_column', 'show_price_column_in_post_list', 10, 2);



function sort_price_column($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    $orderby = $query->get('orderby');

    if ('product_price' == $orderby) {
        $query->set('meta_key', '_my_meta_key'); // Khóa meta cần sắp xếp
        $query->set('orderby', 'meta_value_num'); // Sắp xếp theo giá trị số
    }
}
add_action('pre_get_posts', 'sort_price_column');

