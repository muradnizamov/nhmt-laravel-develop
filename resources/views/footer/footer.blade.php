<footer id='colophon' role='contentinfo'>
	<div class='wrap'>
		<div id='inner'>
			@include('.stripes')
			<div class='lower'>
				@include('footer.recent-posts')
				@include('footer.popular-posts')
				@include('footer.fb')
			</div>
			<div id="reserved">
				<p>{{ "© " . $nhmt . " " . date('Y') }}</p>
			</div>
		</div>
		<!-- #inner -->
	</div>
	<!-- #wrap -->
</footer>

