<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TVC Alert</title>
	<link rel="stylesheet" href="<?php base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" href="<?php base_url(); ?>assets/css/style.css">
</head>
<body>

	<?php $this->load->view('templates/header') ?>	
	
	<div class="container">
		<form action="<?php base_url(); ?>alert" method="post">
			<input type="checkbox" name="new_ad" autocomplete="off">
			<label for="new_ad">New Ads</label>
			
			<input type="checkbox" name="new_prog" autocomplete="off">
			<label for="new_prog">New Programs</label>
			
			<input type="checkbox" name="branded_prog" autocomplete="off">
			<label for="branded_prog">Branded Program</label>
			
			<input type="submit" name="submit" value="Submit" autocomplete="off">
		</form>

		<span><?php echo $message;?></span>
		<!-- <a href="<?php base_url(); ?>alert"><button>Generate</button></a> -->
	</div>

</body>
</html>