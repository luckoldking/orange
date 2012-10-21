<?php
function orange_get_image_cats($pid) {
	$cats = get_categories(array(
		'hide_empty' => false, 
		'orderby' => 'id', 
		'child_of' => $pid, 
		'title_li' => false
	));	

	$attaches = get_posts(array(
		'post_type' => 'attachment'
	));
	

	// 将类目关联上图片
	$cache = array();
	foreach ($attaches as $attach) {
		$key = trim(strtolower($attach->post_title));
		$cache[$key] = $attach;
	}

	foreach ($cats as $cat) {
		$key = trim(strtolower($cat->name));
		if (!empty($cache[$key])) {
			$attach = $cache[$key];
			$cat->image = wp_get_attachment_url($attach->ID);
		}
	}

	return $cats;
}

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

