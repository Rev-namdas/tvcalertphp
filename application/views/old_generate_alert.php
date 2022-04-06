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
									<?php
										$this->load->database();
					
										$sql = 'SELECT DISTINCT(product_type) FROM `new_ad` ORDER BY product_type;';
										$query = $this->db->query($sql);
										
										foreach ($query->result_array() as $each_product_type){
											echo '<div class="producttype">';
												echo $each_product_type["product_type"];
											echo '</div>';

											$sql = 'SELECT DISTINCT(company_name) FROM `new_ad` WHERE product_type=? ORDER BY company_name;';
											$query = $this->db->query($sql, $each_product_type['product_type']);
											
											foreach ($query->result_array() as $each_company){
												// print_r($each_company['company_name']);
												// echo '<br>';

												echo '<div class="companyname-wrapper">';
												echo '<div class="companyname">';
													echo $each_company['company_name'];
												echo '</div>';

												$sql = 'SELECT DISTINCT(ad_name) FROM `new_ad` WHERE company_name=? ORDER BY ad_name;';
												$query = $this->db->query($sql, $each_company['company_name']);
												
												foreach ($query->result_array() as $each_ad){
													echo '<div class="adname-wrapper">';
													echo '<div class="adnamestyle">';
													echo $each_ad['ad_name'];
													echo '</div>';
													echo '<div class="channellist">';

													$sql = 'SELECT fa_media, ad_link, media_list FROM `new_ad` WHERE ad_name=?;';
													$query = $this->db->query($sql, $each_ad['ad_name']);

													foreach ($query->result_array() as $fa_media){
														echo '<a class="channelname famedia" target="_blank" href="';
														echo $fa_media['ad_link'];
														echo '">';
														echo $fa_media['fa_media'];
														echo '</a>';
														echo '<span class="channelname">';
														echo $fa_media['media_list'];
														echo '</span>';
													}
													echo '</div>';
													echo '<hr>';
													echo '</div>';
												}
												echo '</div>';
											}
										}
									?>
								</div>
							</div>
							</div>
						</div>
						<!-- <div class="col">
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
						</div> -->
					<?php elseif ($col == 'New Programs') : ?>
						<div class="col">
							<div class="col-title"><?php echo $col; ?></div>

							<div class="content-wrapper">
								<div class="producttype-wrapper">
									<?php foreach ($new_progs as $new_prog) : ?>
										<div class="producttype"><?php echo $new_prog['program_type']; ?></div>
										<div class="companyname-wrapper">
											<div class="adname-wrapper">
												<?php foreach(explode(";", $new_prog['details']) as $each_details) : ?>
													<div class="adnamestyle"><?php echo explode(",", $each_details)[0]; ?></div>
													<div class="programname-wrapper">
														<span class="launchingdatetime"><?php echo "Launching Time: ".explode(",", $each_details)[1]; ?></span>
													</div>
												<?php endforeach; ?>
												<hr />
											</div>
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
									<?php foreach ($branded_progs as $each_prog) : ?>
										<div class="producttype"><?php echo $each_prog['program_type']; ?></div>
										<div class="companyname-wrapper">
											<div class="adname-wrapper">
												<?php foreach(explode(";", $each_prog['details']) as $each_details) : ?>
													<div class="adnamestyle"><?php echo explode(",", $each_details)[0]; ?></div>
													<div class="programname-wrapper">
														<span class="launchingdatetime"><?php echo "Branded By : ".explode(",", $each_details)[1]; ?></span>
													</div>
												<?php endforeach; ?>
												<hr />
											</div>
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

<div class="col">
	<div class="col-title">New Ads</div>
	<div class="content-wrapper">
		<div class="producttype-wrapper">
			<div class="producttype">Banking Service</div>
			<div class="companyname-wrapper">
				<div class="companyname">bKash Limited</div>

				<div class="adname-wrapper">
					<div class="adnamestyle">Money Savings From IDLC</div>
					<div class="channellist">
						<a class="channelname famedia" target="_blank" href='#'>Channel 24</a>
						<span class="channelname">, Asian TV, Channel I</span>
					</div>
					<hr />
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="content-wrapper">
<?php
	$this->load->database();

	$sql = 'SELECT DISTINCT(product_type) FROM `new_ad` WHERE date BETWEEN ? AND ? ORDER BY product_type;';
	$query = $this->db->query($sql, [$alert_fromdate, $alert_todate]);
	?>

	<?php if ($query->num_rows() == 0) : ?>
		<div class="producttype-wrapper">
			<div class="message-no"><?php echo 'No New Ads Today'; ?></div>
		</div>
	<?php else : ?>
		<?php foreach ($query->result_array() as $each_product_type) : ?>
			<div class="producttype-wrapper">
				<div class="producttype"><?php echo $each_product_type["product_type"]; ?></div>

				<?php
				$sql = 'SELECT DISTINCT(company_name) FROM `new_ad` WHERE product_type=? AND date BETWEEN ? AND ? ORDER BY company_name;';
				$query = $this->db->query($sql, [$each_product_type['product_type'], $alert_fromdate, $alert_todate]);
				?>

				<?php foreach ($query->result_array() as $each_company) : ?>
					<div class="companyname-wrapper">
						<div class="companyname"><?php echo $each_company['company_name']; ?></div>

						<?php
						$sql = 'SELECT DISTINCT(ad_name) FROM `new_ad` WHERE company_name=? AND date BETWEEN ? AND ? ORDER BY ad_name;';
						$query = $this->db->query($sql, [$each_company['company_name'], $alert_fromdate, $alert_todate]);
						?>

						<div class="adname-wrapper">
							<?php foreach ($query->result_array() as $each_ad) : ?>
								<div class="adnamestyle"><?php echo $each_ad['ad_name']; ?></div>
								<div class="channellist">
									<?php
									$sql = 'SELECT fa_media, ad_link, media_list FROM `new_ad` WHERE ad_name=? AND date BETWEEN ? AND ?;';
									$query = $this->db->query($sql, [$each_ad['ad_name'], $alert_fromdate, $alert_todate]);
									?>

									<?php foreach ($query->result_array() as $media) : ?>
										<a class="channelname famedia" target="_blank" href='<?php echo $media['ad_link']; ?>'><?php echo $media['fa_media']; ?></a>
										<span class="channelname"><?php echo $media['media_list']; ?></span>
									<?php endforeach; ?>
								</div>
								<hr />
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div> -->

<!-- <div class="content-wrapper">
	<div class="producttype-wrapper">
	<?php if(count($new_progs) == 0) : ?>
			<div class="producttype-wrapper">
				<div class="message-no"><?php echo 'No New Programs Today'; ?></div>
			</div>
		<?php else : ?>
			<?php foreach ($new_progs as $new_prog) : ?>
				<div class="producttype"><?php echo $new_prog['program_type']; ?></div>
				<div class="companyname-wrapper">
					<div class="adname-wrapper">
						<?php foreach (explode(";", $new_prog['details']) as $each_details) : ?>
							<div class="adnamestyle"><?php echo explode(",", $each_details)[0]; ?></div>
							<div class="programname-wrapper">
								<span class="launchingdatetime"><?php echo "Launching Time: " . explode(",", $each_details)[1]; ?></span>
							</div>
							<hr />
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif;?>
	</div>
</div> -->