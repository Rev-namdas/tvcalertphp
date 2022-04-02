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
					<?php if ($col == 'New Ads') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>
							<div class="content-wrapper">
								<div class="producttype-wrapper">
									<?php foreach ($data[$col]['industry'] as $each_industry => $value) : ?>
										<div class="producttype"><?php echo $each_industry; ?></div>
										<div class="companyname-wrapper">
											<?php foreach ($data[$col]['industry'][$each_industry] as $each_company => $value) : ?>
												<div class="companyname"><?php echo $each_company; ?></div>

												<?php foreach ($data[$col]['industry'][$each_industry][$each_company] as $each_ad => $value) : ?>
													<div class="adname-wrapper">
														<div class="adnamestyle"><?php echo $data[$col]['industry'][$each_industry][$each_company][$each_ad][0]; ?></div>
														<div class="channellist">
															<a class="channelname famedia" target="_blank" href='<?php echo $adlink; ?>'><?php echo $data[$col]['industry'][$each_industry][$each_company][$each_ad][1]; ?></a>
															<span class="channelname"><?php echo $data[$col]['industry'][$each_industry][$each_company][$each_ad][2]; ?></span>
														</div>
														<hr />
													</div>
												<?php endforeach; ?>
											<?php endforeach; ?>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					<?php elseif ($col == 'New Programs') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>

							<div class="content-wrapper">
								<div class="producttype-wrapper">
									<?php foreach ($data[$col]['type'] as $each_program_type => $value) : ?>
										<div class="producttype"><?php echo $each_program_type; ?></div>
										<div class="companyname-wrapper">
											<?php foreach ($data[$col]['type'][$each_program_type] as $each_program => $value) : ?>
												<div class="adname-wrapper">
													<div class="adnamestyle"><?php echo $data[$col]['type'][$each_program_type][$each_program][0]; ?></div>
													<div class="programname-wrapper">
														<span class="launchingdatetime"><?php echo $data[$col]['type'][$each_program_type][$each_program][1]; ?></span>
													</div>
													<hr />
												</div>
											<?php endforeach; ?>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					<?php elseif ($col == 'Branded Programs') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>

							<div class="content-wrapper">
								<div class="producttype-wrapper">
									<?php foreach ($data[$col]['type'] as $each_program_type => $value) : ?>
										<div class="producttype"><?php echo $each_program_type; ?></div>
										<div class="companyname-wrapper">
											<?php foreach ($data[$col]['type'][$each_program_type] as $each_program => $value) : ?>
												<div class="adname-wrapper">
													<div class="adnamestyle"><?php echo $data[$col]['type'][$each_program_type][$each_program][0]; ?></div>
													<div class="programname-wrapper">
														<span class="launchingdatetime"><?php echo $data[$col]['type'][$each_program_type][$each_program][1]; ?></span>
													</div>
													<hr />
												</div>
											<?php endforeach; ?>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<!-- <div class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<span class="videoplayer">
						<?php echo $adlink; ?>
					</span>
				</div>
			</div> -->
		</div>

	</div>

	<!-- <script type="text/javascript">
		const btns = document.querySelectorAll(".famedia");
		const modal = document.querySelector(".modal");
		const close = document.querySelector(".close");
		const player = document.querySelector(".videoplayer iframe");
		console.log(player);

		btns.forEach(eachBtn => {
			eachBtn.addEventListener('click', (e) => {
				modal.style.display = "block";
			})
		})
		
		close.addEventListener('click', (e) => {
			modal.style.display = "none";
			player.pause()
		})

		window.addEventListener('click', (event) => {
			if (event.target == modal) {
				modal.style.display = "none";
				player.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
			}
		})
	</script> -->

</body>

</html>