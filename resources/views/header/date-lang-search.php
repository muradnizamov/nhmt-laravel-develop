<div class='date-lang-search'>
	<div class='date'>
		<?php echo $today . date('j ') . $month . date(' Y') . ", " . $day; ?>
	</div>
	<div class='lang-search'>
		<div class='lang'>
			<?= $lang["toggle1"]; ?>
		</div>
		<div class='search'>
			<form action='<? ?>header/search.php' method='post'>
				<input type='text' name='word' placeholder='<?= $lang["search"]; ?>'>
				<button class='btn' type='submit'></button>
			</form>
		</div>
	</div>
</div>