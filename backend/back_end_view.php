<?php
// Hàm để đếm lượt xem bài viết
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Gọi hàm đếm lượt xem khi bài viết được truy cập
function track_post_views ($post_id) {
    if (!is_single()) return;
    if (empty ($post_id)) {
        global $post;
        $post_id = $post->ID;    
    }
    set_post_views($post_id);
}
add_action('wp_head', 'track_post_views');

// Ngăn chặn các bot làm tăng lượt xem
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Hàm để hiển thị số lượt xem
function get_post_views($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


