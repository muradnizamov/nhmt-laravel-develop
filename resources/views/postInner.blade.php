<?php include 'laravel/blog/resources/views/lang/az4.php' ?>

@extends('layout')

@section('content')
@foreach ($post as $postInner)
<div class="blog-posts hfeed">
	<div class="date-outer">
		<div class="date-posts">
			<div class="post-outer">
				<div class="post hentry">
					<div class="bposttitlewrap">
						<h2 class="post-title bposttitle entry-title" onmouseover="smallFont(this)" onmouseout="normalFont(this)">
							{{ $postInner->pageTitleAz }}
						</h2>
					</div>
					<div class="postdate">
						<span class="posted-by"><?php echo $author ?></span>
						<span class="author">{{ $postInner->authrA }}</span>
						<span class="at">At:</span>
						<span class="date">{{ $postInner->dateA }}</span>
					</div>
					
					<div class="clear"></div>
					
					<div class="entry">
						<div class="post-body entry-content">
							<div dir="ltr" trbidi="on">
								<div class="separator">
								
								<?php if (strripos($postInner->image_name,'jpg')!=FALSE || strripos($postInner->image_name,'jpeg')!=FALSE || strripos($postInner->image_name,'png')!=FALSE || strripos($postInner->image_name,'gif')!=FALSE) { ?>
								
									<a href="/assets/images/{{ $postInner->image_name }}" imageanchor="1"><img src="/assets/images/{{ $postInner->image_name }}" width="640" height="400"></a>
								<?php } ?>
								
								</div>
								<div class="posts-inner">
									{!! $postInner->pageContAz !!}
								</div>
							</div>
							
							<div style="clear: both;"></div>
							
						</div>
						
						<div class="clear"></div>
						
					</div>
				</div>

				<div class="clear"></div>

			</div>
		</div>
	</div> 
</div>
@endforeach

<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/3141703100-widgets.js"></script>

<script type="text/javascript">
if (typeof(BLOG_attachCsiOnload) != 'undefined' && BLOG_attachCsiOnload != null) { window['blogger_templates_experiment_id'] = "templatesV1";window['blogger_blog_id'] = '4354892921275602769';BLOG_attachCsiOnload('item_'); }_WidgetManager._Init('','','')

_WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'headur', null, document.getElementById('Header1'), {}, 'displayModeFull'));

_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'mainblog', null, document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/3237253416-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/1185134592-lightbox_bundle.css'}, 'displayModeFull'));
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561659f01bd9625c" async="async"></script>

<script src="/assets/js/jquery-1.11.3.js"></script>
<script src="/assets/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.js"></script>
@stop