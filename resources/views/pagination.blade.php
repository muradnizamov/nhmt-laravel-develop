@if ($lastpage > 1)
@php
	$paginate .= "<div class='blog-pager' id='blog-pager'><div class='showpageArea'>";
@endphp
<!-- Previous -->
	@if ($page > 1)
		@php
			$paginate .= "<span class='enabled'><a href='?page=" . $prev . "'>&larr;</a></span>";
		@endphp
	@else
		@php
			$paginate .= "<span class='disabled'>&larr;</span>";
		@endphp
	<!-- Pages -->
	@endif
	@if ($lastpage < 9)
		<!-- Not enough pages to breaking it up -->
		@for ($counter = 1; $counter <= $lastpage; $counter++)
			@if ($counter == $page)
				@php
					$paginate .= "<span class='current'>" . $counter . "</span>";
				@endphp
			@else
				@php
					$paginate .= "<span class='show-page'><a href='?page=" . $counter . "'>" . $counter . "</a></span>";
				@endphp
			@endif
		@endfor
	@else
		<!-- Enough pages to hide a few? -->
		<!-- Beginning only hide later pages -->
		@if ($page < 5)
			@for ($counter = 1; $counter < 7; $counter++)
				@if ($counter == $page)
					@php
						$paginate .= "<span class='current'>" . $counter . "</span>";
					@endphp
				@else
				@php
					$paginate .= "<span class='show-page'><a href='?page=" . $counter . "'>" . $counter . "</a></span>";
				@endphp
				@endif
			@endfor
			@php
				$paginate .= "<span class='show-dot'><span>...</span></span>";
				$paginate .= "<span class='show-page'><a href='?page=" . $lastpage . "'>" . $lastpage . "</a></span>";
			@endphp
		<!-- Middle hide some front and some back -->
		@elseif ($lastpage - 2 > $page AND $page > 4)
			@php
				$paginate .= "<span class='show-page'><a href='?page=1'>1</a></span>";
				$paginate .= "<span class='show-dot'><span>...</span></span>";
			@endphp
			@for ($counter = $page - 2; $counter <= $page + 1; $counter++)
				@if ($counter == $page)
					@php
						$paginate .= "<span class='current'>" . $counter . "</span>";
					@endphp
				@else
					@php
						$paginate .= "<span class='show-page'><a href='?page=" . $counter . "'>" . $counter . "</a></span>";
					@endphp
				@endif
			@endfor
			@php
				$paginate .= "<span class='show-dot'><span>...</span></span>";
				$paginate .= "<span class='show-page'><a href='?page=$lastpage'>" . $lastpage . "</a></span>";
			@endphp
			<!-- End only hide early pages -->
		@else
			@php
				$paginate .= "<span class='show-page'><a href='?page=1'>1</a></span>";
				$paginate .= "<span class='show-dot'><span>...</span></span>";
			@endphp
			@for ($counter = $lastpage - 5; $counter <= $lastpage; $counter++)
				@if ($counter == $page)
					@php
						$paginate .= "<span class='current'>" . $counter . "</span>";
					@endphp
				@else
					@php
						$paginate .= "<span class='show-page'><a href='?page=" . $counter. "'>" . $counter . "</a></span>";
					@endphp
				@endif
			@endfor
		@endif
	@endif

		<!-- // Next -->
		@if ($page < $counter - 1)
			@php
				$paginate .= "<span class='enabled'><a href='?page=" . $next . "'>&rarr;</a></span>";
			@endphp
		@else
			@php
				$paginate .= "<span class='disabled'>&rarr;</span>";
			@endphp
		@endif
		@php
			$paginate .= "</div></div>";
		@endphp
	{!! $paginate !!}
@endif