<div class="widget PopularPosts" id="PopularPosts2">
	<h2><a href="/{{ $l }}/videos"><?= $lang["video"]; ?></a></h2>
		<div class="flowplayer" data-adaptive-ratio="true">
			
			<?php
				if (strstr($uri, "index.php") == 'index.php') {
			?>
			
			<video autoplay>
			
			<?php } else { ?>
			
			<video>
			
			<?php } ?>
			@foreach ($video as $vid)
				<source type="video/webm" src="/assets/videos/{{ $vid -> video_az }}">
				<source type="video/flash" src="/assets/videos/{{ $vid -> video_az }}">
				<source type="video/mp4" src="/assets/videos/{{ $vid -> video_az }}">
			@endforeach
			</video>
		</div>
		<div class="widget-content">
		<a href="http://nhmt-az.org/videos.php?id=<?php ?>"></a>
		</div>
		<div class="clear"></div>
</div>