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

	<div class="core-container">
		<div class="paper-layout">
			<div class="paper-header">
				<img src="<?php base_url(); ?>assets/img/icon_adicon.png" alt="Ad Icon" height="80">
				<div class="center">
					<img src="<?php base_url(); ?>assets/img/icon_tv.png" alt="TV Icon" height="80" class="tv-icon">
					<div class="paper-title">TV Media Insights</div>
				</div>
				<img src="<?php base_url(); ?>assets/img/icon_prog.png" alt="Program Icon" height="70">
			</div>
			<div class="paper-container">
				<?php foreach ($cols as $col) : ?>
					<div class="col">
						<div class="col-title"><?php echo $col; ?></div>
						<div class="content-wrapper">
							<div class="producttype-wrapper">
								<div class="producttype">Banking Service</div>

								<div class="companyname-wrapper">
									<div class="companyname">bKash Limited</div>

									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
								</div>
								<div class="companyname-wrapper">
									<div class="companyname">bKash Limited</div>

									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
								</div>
							</div>
							<div class="producttype-wrapper">
								<div class="producttype">Banking Service</div>

								<div class="companyname-wrapper">
									<div class="companyname">bKash Limited</div>

									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
								</div>
								<div class="companyname-wrapper">
									<div class="companyname">bKash Limited</div>

									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
									<div class="adname-wrapper">
										<div class="adnamestyle">Money Savings On IDLC Account 10s 03-03-2022</div>
										<div class="channellist">
											<span id="trigger" class="channelname famedia" data-link='<?php echo $adlink; ?>'>Channel 24</span>
											<span class="channelname">, Somoy TV</span>
											<span class="channelname">, Independent TV</span>
											<span class="channelname">, Nagorik TV</span>
											<span class="channelname">, Bangla TV</span>
										</div>
										<hr />
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div id="adpopup" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<?php echo $adlink;?>
				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript">
		// const btn = document.querySelector("#trigger");
		const btns = document.querySelectorAll("#trigger");
		const modals = document.querySelectorAll("#adpopup");
		const closes = document.querySelectorAll("close");

		btns.forEach(eachBtn => {
			eachBtn.addEventListener('click', (e) => {
				modal.style.display = "block";
			})
		})

		closes.forEach(eachCloseBtn => {
			eachCloseBtn.addEventListener('click', (e) => {
				modal.style.display = "none";
			})
		})

		modals.forEach(eachModal => {
			window.addEventListener('click', (event) => {
				if (event.target == eachModal) {
					modal.style.display = "none";
				}
			})
		})
	</script>

</body>

</html>