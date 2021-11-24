<?php

// tap tin nay dc goi ra moi lan tai trang => ma nao thuc thi moi lan tai trang thi cho vao day

/** 
 * @ khai bao hang gia tri
 *  @ THEME_URL = lay duong dan thu  muc theme
 *  @CORE = lay duong dan thu muc core   
 * */

 define('THEME_URL', get_stylesheet_directory());
 define('CORE', THEME_URL . "/core");

 /**
  * Nhung file /core/init.php
  */
  require_once(CORE . "/init.php");

  /**
   * Thiet lap chieu rong noi dung
   */
   if(!isset($content_width)) {
       $content_width = 620;
   }

   /**
    * Khai bao chung nang cua theme
    */
    if(!function_exists('thachpham_theme_setup')) {
        function thachpham_theme_setup() {

            // Thiet lap textdomain
            $language_folder = THEME_URL . '/languages';
            load_theme_textdomain('thachpham',$language_folder );

            // Tu dong them link RSS len <head>
            add_theme_support('automatic_feed_links');//Ham nay tu dong them chuc nang co san trong WP vao theme cua minh

            // Them post thumbnail
            add_theme_support('post-thumbnails'); 

            //Post format
            add_theme_support('post-formats', array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            ));

            // Them title-tag
            add_theme_support('title-tag');
            
            //Them custom background video 4 24p
            $default_background = array(
                'default-color' => '#e8e8e8'
            );
            add_theme_support('custom-background', $default_background);

            //Them menu
            register_nav_menu('primary-menu', __('Primary Menu', 'thachpham'));

            // Tao sidebar
            $sidebar = array(
                'name' => __('Main Sidebar', 'thachpham'),
                'id' => 'main-sidebar',
                'description' => __('Default Sidebar'),
                'class' => 'main-sidebar',
                'before-title' => '<h3 class="widgettitle">',
                'after-title' => '</h3>' 
            );
            register_sidebar($sidebar);
        } 
        add_action('init', 'thachpham_theme_setup');
    }