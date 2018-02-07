<?php include 'laravel/blog/resources/views/lang/az4.php'; ?>

@extends('layout')

@section('content')
<title></title>

<div class="blog-posts hfeed">
	<div class="date-outer">
		<div class="date-posts">
			<div class="post-outer">
				<div class="post hentry contact">
					<div class="address"><?php echo $address; ?></div>
					
					<?php
					
						//if "email" variable is filled out, send email
						if (isset($_REQUEST['email']))  {
  
							//Email information
							$to = "nizamovmurad@gmail.com";
							$from = $_REQUEST['email'];
							$subject = $_REQUEST['subject'];
							$message = $_REQUEST['message'];
  
							//send email
							mail($to, $from, $subject, $message);
  
							//Email response
							echo $thank;
							header('Refresh: 2; url=contact.php');
							}
  
							//if "email" variable is not filled out, display the form
							else  {
							?>
							
							<form method="post"> 
								<label for="email"></label><input name="email" id="email" type="text" placeholder="<?= $lang["email"] ?>" required /><br /><br />
								<label for="subject"></label><input name="subject" id="subject" type="text" placeholder="<?= $lang["subject"] ?>" /><br /><br />
								<textarea name="message" rows="10" cols="40" placeholder="<?= $lang["message"] ?>"></textarea><br />
								<input type="submit" value="<?= $lang["send"]; ?>" />
							</form>
  
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>

<script src="/assets/js/jquery-1.11.3.js"></script>
<script src="/assets/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.js"></script>
@stop