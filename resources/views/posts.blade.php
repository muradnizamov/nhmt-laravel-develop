<?php include 'laravel/blog/resources/views/lang/az4.php'; ?>

@extends('layout')

@section('content')
<div class='blog-posts hfeed'>
	<div class='date-outer'>
		<div class='date-posts'>
			@foreach ($contents as $content)
			@if (stripos($content->pageContAz, "</p>") !== false)
				<?php 
					$dataContentArray = explode("</p>",$content->pageContAz);
					$dataContentPart = stristr($content->pageContAz, $dataContentArray[5], true)
				?>
			@elseif (stripos($content->pageContAz, ",") !== false)
				<?php $dataContentArray = explode(",",$content->pageContAz) ?>
				@if (!empty($dataContentArray[10]))
					<?php
						$dataContentPart = stristr($content->pageContAz, $dataContentArray[10], true)
					?>
				@elseif (!empty($dataContentArray[5]))
					<?php
						$dataContentPart = stristr($content->pageContAz, $dataContentArray[5], true)
					?>
				@elseif (!empty($dataContentArray[3]))
					<?php $dataContentPart = stristr($content->pageContAz, $dataContentArray[3], true)
					?>
				@else
					<?php
					$dataContentPart = stristr($content->pageContAz, $dataContentArray[1], true)
					?>
			@endif
			@elseif (stripos($content->pageContAz, ".") !== false)
				<?php
					$dataContentArray = explode(".",$content->pageContAz);
					$dataContentPart = stristr($content->pageContAz, $dataContentArray[10], true)
				?>
			@else
				<?php $dataContentPart = $content->pageContAz ?>
			@endif
						<div class='post-outer'>
							<div class='post hentry'>
								<div class='bposttitlewrap'>
									<h2 class='post-title bposttitle entry-title' onmouseover='smallFont(this)' onmouseout='normalFont(this)' >{!! $content->pageTitleAz !!}</h2>
								</div>
								<div class='postdate'>
									<span class='posted-by'>{{ $author }}</span>
									<span class='author'>{!! $content->authrA !!}</span>
									<span class='at'>At:</span>
									<span class='date'>{!! $content->dateA !!}</span>
								</div>
					
								<div class='clear'></div>
					
								<div class='entry'>
									<div class='post-body entry-content'>
										<div id='summary1943401056864600464'>
											<span><img src='/assets/images/{!! $content->image_name !!}'></span>
											<?php include "/assets/js/dotdotdot.php" ?>
											<div class='content'>
												{!! $dataContentPart !!}
											</div>
										</div>
										<div class='readmorecontent'>
											<a class='readmore' href='/az/{{ $content -> category . "/" . $content -> pageID }}'>{{ $readmore }}</a>
										</div>
										
										<div style='clear: both;'></div>
									</div>
								</div>
							</div>
							
							<div style='clear: both;'></div>
						</div>
					@endforeach
		</div>
	</div>
</div>
@include('pagination')
@stop