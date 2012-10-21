<html>
	<head>
		<title>
			orange
		</title>
	</head>
	<body>
	<ul>
		<?php 
		$moltifs_cats = get_categories(array(
			'hide_empty' => false, 
			'orderby' => 'id', 
			'child_of' => 30, 
			'title_li' => false
		));

		print_r($moltifs_cats);

		?>
	</ul>
	</body>
</html>
