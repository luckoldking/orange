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


define(CAT_MOTIFS_ID, 31);
define(CAT_PRODUCTS_ID, 30);

add_filter('category_template', 'orange_category_template');
function orange_category_template($template = '') {
	global $cat;
	
	$id_map = array(
		CAT_MOTIFS_ID => 'category-motifs.php',
		CAT_PRODUCTS_ID => 'category-products.php'
	);

	$pid_map = array(
		CAT_MOTIFS_ID => 'category-motifs-children.php',
		CAT_PRODUCTS_ID => 'category-products.php'
	);

	$cat_id = $cat;

	if (!empty($id_map[$cat_id])) {
		$template = $id_map[$cat_id];
	} else {
		$template = 'category.php';
		while ($cat_id) {
			if (!empty($pid_map[$cat_id])) {
				$template = $pid_map[$cat_id];
				break;
			}
			$o = get_category($cat_id);
			$cat_id = $o->category_parent;
		}
	}

	return locate_template($template, false);
}


/* Pagenavi */  
function pagenavi($p = 2) {   
	if (is_singular()) {
		return;   
	}

	global $wp_query, $paged;   

	$max_page = $wp_query->max_num_pages;   
	if ($max_page == 1) {
		return;
	}

	if (empty($paged)) {
		$paged = 1;
	}

	echo '<div id="pagenavi">' . "\n";   
	echo '<span>Page: ' . $paged . ' of ' . $max_page . ' </span>';   
	if ($paged > 1) {
		p_link($paged - 1, 'Previous Page', '«');   
	}
	if ($paged > $p + 1) {
		p_link(1, 'First Page');   
	}
	if ($paged > $p + 2) {
		echo '... ';   
	}
	for($i = $paged - $p; $i <= $paged + $p; $i++) {   
		if ($i > 0 && $i <= $max_page) {
			$i == $paged ? print "<span class='page-numbers current'>{$i}</span>" : p_link( $i );
		}
	}   
	if ($paged < $max_page - $p - 1) {
		echo '... ';   
	}
	if ($paged < $max_page - $p) {
		p_link($max_page, 'Last Page');   
	}
	if ($paged < $max_page) {
		p_link($paged + 1, 'Next Page', '»');   
	}
	echo '</div>';   
}   

function p_link($i, $title = '', $linktype = '') {   
	if ($title == '') {
		$title = "Page {$i}";   
	}
	$linktext = $linktype == '' ? $i : $linktype;
	echo "<a class='page-numbers' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a>";   
}
