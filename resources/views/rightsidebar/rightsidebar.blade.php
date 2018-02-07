<div class='widget-area' id='secondary' role='complementary'>
	<div class='sidebar section' id='sidebartop'>
		@if ($selected_lang_1 == 'az1')
		@if (strstr($uri, "qa") !== 'qa' AND strpos($_SERVER['REQUEST_URI'], "videos") == FALSE AND strstr($uri, "actual") !== 'actual')
			@include('rightsidebar.sc')
			@include('rightsidebar.video')
			@include('rightsidebar.aktual')
		@elseif (strstr($uri, "qa") == 'qa')
			@include('rightsidebar.video')
			@include('rightsidebar.aktual')
		@elseif (strpos($_SERVER['REQUEST_URI'], "videos") > 0)
			@include('rightsidebar.sc')
			@include('rightsidebar.aktual')
		@endif
		@endif
	</div>
</div>