<div class="widget PopularPosts" id="PopularPosts2">
	<h2><a href="/az/actual"><?= $lang["actual"]; ?></a></h2>
	<div class="widget-content popular-posts">
		<ul>
		@foreach ($aktuals as $aktual)
			<li>
				<div class='item-thumbnail-only'>
					<div class='item-thumbnail'>
						<a href="/az/actual/{{ $aktual -> pageID }}" target="_blank"><img src="/assets/images/{{ $aktual -> image_name }}" alt=""></a>
					</div>
				<div class="actual-title">
					<a href="/az/actual/{{ $aktual -> pageID }}">{{ $aktual -> pageTitleAz }}</a>
				</div>
				</div>
				<div style='clear: both;'></div>
			</li>
		@endforeach						
		</ul>
		<div class="clear"></div>
	</div>
</div>