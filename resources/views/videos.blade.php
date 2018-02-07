<?php include 'laravel/blog/resources/views/lang/az4.php'; ?>

@extends('layout')

@section('content')

	<script>
	// ensure the web page (DOM) has loaded
	document.addEventListener("DOMContentLoaded", function () {
		
		<?php
			foreach ($contents as $contentID) {
			 if(!empty($contentID -> id) && $contentID -> id != $videoID) {
		?>
			
		// Create a popcorn instance by calling Popcorn("#id-of-my-video")
		var video<?php echo $contentID -> id ?> = Popcorn("#video<?php echo $contentID -> id ?>");
		
		// Once the video has loaded into memory, we can capture the poster
		video<?php echo $contentID -> id; ?>.listen( "canplayall", function() {
			this.currentTime( 20 ).capture();
			});
		
		<?php } } ?>
        
      }, false);
</script>

<div class="blog-posts hfeed">
	<div class="date-outer">
		<div class="date-posts">
			<div class="post-outer" style="background: none">
				<div class="post hentry">
					<div class="bposttitlewrap">
					@if ($videoID > 0)
						@php
							switch ($lg) {
								case 'en':
									$videoIDtitle = $contentVideoID -> title_en;
									$videoDate = $contentVideoID -> upload_date_en;
									break;
								default:
									$videoIDtitle = $contentVideoID -> title_az;
									$videoDate = $contentVideoID -> upload_date_az;
									break;
							}
						@endphp			
						<div class="flowplayer">
							<video autoplay>
								<source type="video/webm" src="/frontend/assets/videos/{{ $contentVideoID -> video_az }}">
								<source type="video/flash" src="/frontend/assets/videos/{{ $contentVideoID -> video_az }}">
								<source type="video/mp4" src="/frontend/assets/videos/{{ $contentVideoID -> video_az }}">
							</video>
						</div>
						<div class="video-caption">
							<h3>{{ $videoIDtitle }}<p>{{ $videoDate }}</p></h3>
						</div>
						
						<!-- Go to www.addthis.com/dashboard to customize your tools -->
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561659f01bd9625c" async="async"></script>
					@endif
					
						<div class="entry video">

						@foreach ($contents as $content)
							@php
								switch ($lg) {
									case 'en':
										$videoIDtitle = $content -> title_en;
        								$videoDate = $content -> upload_date_en;
        								break;
        	
        							default:
        								$videoIDtitle = $content -> title_az;
        								$videoDate = $content -> upload_date_az;
        								break;
        						}
        					@endphp
        					@if($videoID != '')
        						<title>{{ $nhmt . " ― " . $videoIDtitle }}</title>
        					@else
        						<title>{{ $videoTitle }}</title>
        					@endif

							@if(!empty($content -> id) && $content -> id != $videoID)
						
							<div class="video-playlist">
								<a href="/{{ $lg }}/videos/{{ $content -> id }}">
									<video id="video{{ $content -> id }}" preload="metadata">
										<source type="video/webm" src="/frontend/assets/videos/{{ $content -> video_az }}">
										<source type="video/flash" src="/frontend/assets/videos/{{ $content -> video_az }}">
										<source type="video/mp4" src="/frontend/assets/videos/{{ $content -> video_az }}">
									</video>
									<div>
										{!! $videoIDtitle !!}
										<br>
										<span>{!! $videoDate !!}</span>
									</div>
									<div class="clear"></div>
								</a>
							</div>
						
							@endif
						@endforeach
						
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/assets/js/jquery-1.11.3.js"></script>
<script src="/assets/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.js"></script>
@include('pagination')
@stop