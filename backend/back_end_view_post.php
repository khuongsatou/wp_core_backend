<?php

// Thêm cột mới vào danh sách bài viết
function add_views_column($columns) {
    $columns['post_views'] = 'Views';
    return $columns;
}
add_filter('manage_posts_columns', 'add_views_column');

// Hiển thị số lượt xem trong cột mới
function display_views_column($column_name, $post_id) {
    if ($column_name == 'post_views') {
        echo get_post_views($post_id);
    }
}
add_action('manage_posts_custom_column', 'display_views_column', 10, 2);
