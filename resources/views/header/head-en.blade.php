<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="OWRPO, human rights, human, rights, oil, bmq">
	<meta name="description" content="<?php if (isset($_GET['id'])) { echo strip_tags(substr($row -> pageContEn,0,700)); } else { echo $lang['identity']; } ?>"/>
	<meta name="author" content="FB.COM/NAME.MURAD"/>
	<meta name="copyright" content="http://www.nhmt-az.org/"/>
	
	<?php
		if (isset($_GET['id'])) { ?>
		
			<meta property="og:title" content="<?= $lang['contents-inner-title']; ?>" />
			<meta property="og:image" content="http://nhmt-az.org/frontend/assets/images/<?php echo $row -> image_name; ?>" />
			<meta property="og:image:width" content="527" />
			<meta property="og:image:height" content="277" />
			<meta property="og:description" content="<?php echo strip_tags(substr($row -> pageContEn,0,700)); ?>" />
			<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
			
			<?php } ?>		
			
	<link rel="shortcut icon" href="/frontend/assets/images/<?php echo $fav_icon ?>-fav-icon.ico" type="image/x-icon" />
	<link href="http://fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://www.blogger.com/static/v1/widgets/859616579-widget_css_bundle.css" />
	<link rel="stylesheet" href="<?php echo DIR ?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?php echo DIR ?>assets/css/sel-style.css"/>
	<link rel="stylesheet" href="<?php echo DIR ?>assets/fonts/font.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	
	<!-- Add jQuery library―edit―fancyBox-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js"></script>

	<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

	<!-- 1. skin-edit-flowplayer -->
	<link rel="stylesheet" href="//releases.flowplayer.org/6.0.5/skin/functional.css">
 
	<!-- 3. flowplayer-edit-flowplayer -->
	<script src="//releases.flowplayer.org/6.0.5/flowplayer.min.js"></script>
	
	<!-- Popcorn.js -->
	<script src="http://popcornjs.org/code/dist/popcorn-complete.min.js"></script>
	
	<script src="<?php echo DIR ?>assets/js/scripts.js"></script>
</head>