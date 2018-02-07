<?php
include ("../backend/lang/" . $selected_lang_2 . ".php");
?>

<title><?= $lang["search-title"]; ?></title>

<?php
include ("../backend/lang/" . $selected_lang_3 . ".php");
?>

<div class='blog-posts hfeed'>
	<div class='date-outer'>
		<div class='date-posts'>
			<div class='post-outer'>
				<div class="widget PopularPosts" id="qa">
					<?php search (); ?>
			
					<div class="clear"></div>
		
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>










		