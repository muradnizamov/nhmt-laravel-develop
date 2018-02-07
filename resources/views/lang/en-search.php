<?php
function search () {
	
	$word = trim(mysql_real_escape_string(strip_tags($_POST['word'])));
	
	if (!empty($word) && $word != " " && strlen($word) > 2) {
	
		$search = preg_quote($word);

		$search = preg_replace('/(c|ç|C|Ç)/', '(c|ç|C|Ç)', $search);
		$search = preg_replace('/(ə|e|Ə|E)/', '(ə|e|Ə|E)', $search);
		$search = preg_replace('/(g|ğ|G|Ğ)/', '(g|ğ|G|Ğ)', $search);
		$search = preg_replace('/(i|ı|İ|I)/', '(i|ı|İ|I)', $search);
		$search = preg_replace('/(o|ö|O|Ö)/', '(o|ö|O|Ö)', $search);
		$search = preg_replace('/(s|ş|S|Ş)/', '(s|ş|S|Ş)', $search);
		$search = preg_replace('/(u|ü|U|Ü)/', '(u|ü|U|Ü)', $search);
	
		$search_general_table = mysql_query("SELECT * FROM general_table ORDER BY pageID DESC");
		$letter_number = strlen($word);
?>
	
<h2><span id="word"></span>“<?php echo $word ?>”</h2> 
<div class="widget-content" id="sc">
	<ul id="searched-word-list">
			
<?php	//SEARCH RESULTS FROM GENERAL_TABLE
	while ($result_general_table = mysql_fetch_array($search_general_table)) {
		if (preg_match('/' . $search . '/si', $result_general_table[2]) || preg_match('/' . $search . '/si', $result_general_table[9])) { 
			if (stripos($result_general_table[2], $word) !== false) { 
				$whole_previous_from_searched_word = stristr($result_general_table[2], $word, true);
				$whole_following_from_searched_word = stristr($result_general_table[2], $word);
				$searched_word = substr($whole_following_from_searched_word,0,$letter_number);
				$following_from_searched_word = substr($whole_following_from_searched_word,$letter_number);?>
	
<li>
	<div class="item-thumbnail-only">
		<div class="item-title">
			<div id="searched-word">
				<a href="<?php echo DIR.'pages/'.$result_general_table[10].'-inner.php?id='.$result_general_table[0] ?>" target="_blank"><?php echo $whole_previous_from_searched_word."<span>".$searched_word."</span>".$following_from_searched_word ?></a>
			</div>
		</div>
	</div>
</li>

<?php }else { ?>

<li>
	<div class="item-thumbnail-only">
		<div class="item-title">
			<div id="searched-word">
				<a href="<?php echo DIR.'pages/'.$result_general_table[10].'-inner.php?id='.$result_general_table[0] ?>" target="_blank"><?php echo $result_general_table[2] ?></a>
			</div>
		</div>
	</div>
</li>
	
<?php }
	$result_general_table[9] = strip_tags($result_general_table[9]);
	if (preg_match('/(.+)?(' . $search . ')(?<name>.+)?/si', $result_general_table[9], $matches)) {
		$random = '';
		for ($i = 0; $i<2; $i++) {
			$random .= mt_rand(1,8);
		}
		$random100 = $random+100;
		$limited_matches1 = substr($matches[1],-$random);
		$limited_matches_name = substr($matches[name],0,$random100);
?>
	
<div id="searched-content">
	...<?php echo $limited_matches1."<span>".$matches[2]."</span>".$limited_matches_name ?>
</div>

<?php } } } ?>

</ul>

<script src="<?php echo DIR ?>assets/js/search-en.js"></script>

<?php } else { ?>

	<h2>Enter key word</h2>
	<div class="widget-content" id="sc">
	
<?php } } ?>