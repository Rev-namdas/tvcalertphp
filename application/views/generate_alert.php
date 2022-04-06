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

	<div class="core-container">
		<a class="generate-btn" href="<?php echo base_url(); ?>">Generate Another</a> <br>
		<div class="paper-layout">
			<div class="paper-header">
				<img src="<?php base_url(); ?>assets/img/icon_adicon.png" alt="Ad Icon" height="80">
				<div class="center">
					<img src="<?php base_url(); ?>assets/img/icon_tv.png" alt="TV Icon" height="80" class="tv-icon">
					<div class="paper-title">TV Media Insights</div>
					<div class="alert-date">(<?php echo $alert_from_date == $alert_to_date ? $alert_from_date : $alert_from_date." - ".$alert_to_date;?>)</div>
				</div>
				<img src="<?php base_url(); ?>assets/img/icon_prog.png" alt="Program Icon" height="70">
			</div>
			<div class="paper-container">
				<?php foreach ($cols as $col) : ?>
					<?php if ($col == 'New Ads') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>

							<?php $this->load->view('templates/new_ad') ?>
						</div>
					<?php elseif ($col == 'New Programs') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>

							<?php $this->load->view('templates/new_prog') ?>
						</div>
					<?php elseif ($col == 'Branded Programs') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>

							<?php $this->load->view('templates/branded_prog') ?>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="paper-footer">
			Copyright &copy; Ryans Archives Limited
		</div>
	</div>
</body>

</html>