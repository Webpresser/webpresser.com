<?php //=======================================================================
// header.php
// The main header, includes the main navbar
//========================================================================*/ ?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php bloginfo(); ?></title>

		<link rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/style.css'; ?>">
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url').'/favicon.ico';?>" type="image/x-icon">
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/head.js"></script>
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body>