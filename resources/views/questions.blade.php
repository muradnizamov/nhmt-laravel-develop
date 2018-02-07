<?php include 'laravel/blog/resources/views/lang/az4.php'; ?>

@extends('layout')

@section('content')
<div class='blog-posts hfeed'>
	<div class='date-outer'>
		<div class='date-posts'>
			<div class='post-outer'>
				<div class="widget PopularPosts" id="qa">
					<h2>SUAL CAVAB</h2>
					<div class="widget-content" id="sc">
						<ul>
						@foreach ($contents as $content)
							<li>
								<div class="item-thumbnail-only">
									<div class="item-title">
										<a href='/az/qa/{{ $content -> pageID }}'>{{ $content -> questionAz }}</a>
									</div>
								</div>
							</li>
						@endforeach
						</ul>
					<div class="clear"></div>
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