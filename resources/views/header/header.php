<header id='branding' role='banner'>

	<div class='header-navigation'>
		<?php include '/laravel/blog/resources/views/header/date-lang-search.php'; ?>
	</div>
	
	<div id='head-inner'>
	
		<!-- LOGO -->
		<div class='logo'>
			<div class='header section' id='headur'>
				<div id='header-inner'>
					<div class='titlewrapper'>
						<h11 class='title'><?= $lang["identity"]; ?></h11>
					</div>
					<div class='descriptionwrapper'>
						<p class='description'><span></span></p>
					</div>
				</div>
			</div>
		</div>
				
		<!-- NAVBAR -->
		<?php include 'laravel/blog/resources/views/header/navbar.blade.php'; ?>
				
		<!-- STRIPES -->
		<?php include 'laravel/blog/resources/views/header/stripes.blade.php' ?>
			
	</div>
</header>
				
				
				