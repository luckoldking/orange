<?php
/* 
 * orange functions and definitions 
 * */

add_action( 'after_setup_theme', 'orange_custom_func' );

function orange_custom_func(){
	/* 添加导航菜单 */
	//add_action( 'init', 'orange_register_menus' );
	add_theme_support( 'menus' );
	register_nav_menu('primary', __( 'Primary Menu', 'orange' ));
	
	add_theme_support( ‘automatic-feed-links’ );
	

    $args = array(
    'default-color' => '000000', //默认背景颜色
    'default-image' => get_template_directory_uri() . '/images/background.jpg', //默认背景图像
    );
    add_theme_support( 'custom-background', $args );

	
}




/* 自定义代码*/
?>