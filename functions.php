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

