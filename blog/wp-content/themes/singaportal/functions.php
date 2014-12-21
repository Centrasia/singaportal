<?php

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(300, 200, true ); // 幅 300px、高さ 200px、切り抜きモード


add_action('init', 'my_custom_init');
function my_custom_init()
{
  $labels = array(
    'name' => _x('新着情報', 'post type general name'),
    'singular_name' => _x('新着情報', 'post type singular name'),
    'add_new' => _x('新しく新着情報を書く', 'update'),
    'add_new_item' => __('新着情報を書く'),
    'edit_item' => __('新着情報を編集'),
    'new_item' => __('新しい新着情報記事'),
    'view_item' => __('新着情報を見る'),
    'search_items' => __('新着情報を探す'),
    'not_found' =>  __('新着情報はありません'),
    'not_found_in_trash' => __('ゴミ箱に新着情報はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes'),
    'has_archive' => true
  );
  register_post_type('update',$args);
}

//投稿時のメッセージとか
add_filter('post_updated_messages', 'book_updated_messages');
function book_updated_messages( $messages ) {

  $messages['update'] = array(
    0 => '', // ここは使用しません
    1 => sprintf( __('新着情報を更新しました <a href="%s">記事を見る</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('カスタムフィールドを更新しました'),
    3 => __('カスタムフィールドを削除しました'),
    4 => __('新着情報更新'),
    5 => isset($_GET['revision']) ? sprintf( __(' %s 前に新着情報を保存しました'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('新着情報が公開されました <a href="%s">記事を見る</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('新着情報を保存'),
    8 => sprintf( __('新着情報を送信 <a target="_blank" href="%s">プレビュー</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('新着情報を予約投稿しました: <strong>%1$s</strong>. <a target="_blank" href="%2$s">プレビュー</a>'),
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('新着情報の下書きを更新しました <a target="_blank" href="%s">プレビュー</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}


function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url(../../../../img/logo-login.gif) 50% 50% no-repeat !important; height: 150px !important; display: block !important; }</style>';
}
add_action('login_head', 'custom_login_logo');


?>