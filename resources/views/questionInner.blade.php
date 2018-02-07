<?php

if(!isset($_GET['qa']) || $_GET['qa'] == ''){ //if no id is passed to this page take user back to previous page
	header('Location: http://localhost/az/qa');
}

include 'laravel/blog/resources/views/lang/az4.php';

?>

@extends('layout')

@section('content')
@foreach ($question as $qa)

<title>{{ $nhmt . ' - ' . $qa -> questionAz }}</title>

<div class='blog-posts hfeed'>
	<div class='date-outer'>
		<div class='date-posts'>
			<div class='post-outer'>
				<div class='widget PopularPosts' id='qa'>
					<h2>{{ "SUAL " . $qa -> pageID }}</h2>
					<div class='widget-content' id='sc'>
						<div class='item-thumbnail-only'>
							<div class='item-title'>
								<p class="question-title">{{ $qa -> questionAz }}</p>
								{!! $qa -> answerAz !!}
								<br /><br />
							</div>
						</div>
		
						<div class='clear'></div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561659f01bd9625c" async="async"></script>

<script src="/assets/js/jquery-1.11.3.js"></script>
<script src="/assets/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.js"></script>
@stop



