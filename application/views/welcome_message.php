<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
			<input type="checkbox" id="new_ad" name="new_ad" autocomplete="off">
			<label for="new_ad">New Ads</label>

			<input type="checkbox" id="new_prog" name="new_prog" autocomplete="off">
			<label for="new_prog">New Programs</label>

			<input type="checkbox" id="branded_prog" name="branded_prog" autocomplete="off">
			<label for="branded_prog">Branded Program</label>

			<input type="submit" name="submit" value="Submit" autocomplete="off">
		</form>

		<!-- <button id="trigger">Open Modal</button>

		<div id="adpopup" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<p>Some text in the Modal..</p>
			</div>
		</div> -->

		<span><?php echo $message; ?></span>
	</div>

	<!-- <script type="text/javascript">
		const btn = document.querySelector("#trigger");
		const modal = document.querySelector("#adpopup");
		const span = document.querySelector(".close");

		btn.addEventListener('click', () => {
			modal.style.display = "block";
		})

		span.addEventListener('click', () => {
			modal.style.display = "none";
		})

		window.addEventListener('click', (event) => {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		})
	</script> -->
</body>

</html>