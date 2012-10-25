<?php
function orange_get_image_cats($pid) {
	$cats = get_categories(array(
		'hide_empty' => false, 
		'orderby' => 'id', 
		'parent' => $pid,
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

function orange_get_cats_r($pid, $level = 2) {
	$cats = get_categories(array(
		'hide_empty' => false, 
		'orderby' => 'id', 
		'parent' => $pid, 
		'title_li' => false
	));	
	
	if ($level > 1) {
		foreach ($cats as $cat) {
			$cat->children = orange_get_cats_r($cat->cat_ID, $level - 1);
		}
	}

	return $cats;
}

function orange_get_post_image($id) {
	$files = array(
		'image/jpg',
		'image/jpeg',
		'image/png',
		'image/gif'
	);
	$args = array(
		'post_type' => 'attachment', 
		'post_parent' => $id
	); 
	$attaches = get_posts($args);

	foreach ($attaches as $attach) {
		if (in_array($attach->post_mime_type, $files)) {
			return wp_get_attachment_url($attach->ID);
		}
	}
	return null;
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


add_filter('category_template', 'orange_category_template');
function orange_category_template($template = '') {
	global $cat;
	$o = get_category($cat);

	$map = array(
		3 => 'category-motifs.php',
		4 => 'category-products.php'
	);
	
	$template = 'category.php';	
	if (!empty($map[$o->cat_ID])) {
		$template = $map[$o->cat_ID];
	} else if (!empty($map[$o->category_parent])) {
		$template = $map[$o->category_parent];
	}

	return locate_template($template, false);
}
