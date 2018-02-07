<?php include 'laravel/blog/resources/views/lang/az4.php' ?>

<div class="widget PopularPosts" id="PopularPosts2">
	<h2><a href="/{{ $l }}/qa">SUAL CAVAB</a></h2>
	<div class="widget-content" id="sc">
		<ul>
		@foreach ($some_questions as $some_question)
			<li>
				<div class="item-thumbnail-only">
					<div class="item-title">
						<a href="http://localhost/az/qa/{{ $some_question -> pageID }}">{{ $some_question -> questionAz }}</a>
					</div>
				</div>
			</li>
		@endforeach
		</ul>
		<div class="clear"></div>
	</div>
</div>