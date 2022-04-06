<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>TVC Alert</title>
	<link rel="stylesheet" href="<?php base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" href="<?php base_url(); ?>assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
	<?php $this->load->view('templates/header') ?>

	<div class="core-container">
		<div class="controller-box">
			<form action="<?php base_url(); ?>alert" method="post">
				<div>
					<div class="report-type">----- Select Report Type -----</div>

					<input type="checkbox" id="new_ad" name="new_ad">
					<label class="checkbox-label" for="new_ad">New Ads</label>
	
					<input type="checkbox" id="new_prog" name="new_prog">
					<label class="checkbox-label" for="new_prog">New Programs</label>
	
					<input type="checkbox" id="branded_prog" name="branded_prog">
					<label class="checkbox-label" for="branded_prog">Branded Program</label>
				</div>
				
				<div class="date-wrapper">
					<label class="date-label" for="alert_from_date">From</label>
					<input type="date" name="alert_from_date" id="alert_from_date" max="<?= date('Y-m-d');?>">
					<label class="date-label" for="alert_to_date">To</label>
					<input type="date" name="alert_to_date" id="alert_to_date" max="<?= date('Y-m-d');?>">
				</div>

				<div class="btn-wrapper">
					<input type="submit" name="submit" class="submit-btn"value="Submit">
				</div>
			</form>

			<div class="error-box"><?= $message;?></div>
		</div>
	</div>
</body>

</html>