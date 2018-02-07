<!DOCTYPE html>
<html lang="en">
	<?php
		if(strpos($_SERVER['REQUEST_URI'],"page") > 0) {
            $uri = stristr(substr(stristr($_SERVER['REQUEST_URI'],"az"),3),"?page",true);
        } else {
            $uri = substr(stristr($_SERVER['REQUEST_URI'],"az"),3);
        }
		include '/laravel/blog/resources/views/lang.php';
	?>
<body class='home blog two-column right-sidebar'>
	<div class='hfeed' id='page'>
		<?php include 'laravel/blog/resources/views/header/header.php'; ?>
		<div id="main">
			<div id='primary'>
				<div class='mainblog section' id='mainblog'>
					<div class='widget Blog' id='Blog1'>
						@yield('content')
					</div>
				</div>
			</div>
			@include('rightsidebar.rightsidebar')
		</div>
		<!--main-->
		@include('footer.footer')		
	</div>
</body>
</html>