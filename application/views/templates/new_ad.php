<?php
	$product_type = '';
	$company_name = '';
?>

<div class="content-wrapper">
	<?php if(count($new_ads) == 0) : ?>
		<div class="producttype-wrapper">
			<div class="message-no"><?php echo 'No New Ads'; ?></div>
		</div>
	<?php else : ?>
		<?php foreach($new_ads as $each_ad) :?>
			<div class="producttype-wrapper">
				<?php if($each_ad['product_type'] != $product_type) :?>
					<div class="producttype"><?= $each_ad['product_type'];?></div>

					<?php $product_type = $each_ad['product_type'];?>
				<?php endif;?>

				<div class="companyname-wrapper">
					<?php if($each_ad['company_name'] != $company_name) :?>
						<div class="companyname"><?= $each_ad['company_name'];?></div>

						<?php $company_name = $each_ad['company_name'];?>
					<?php endif;?>

					<div class="adname-wrapper">
						<div class="adnamestyle"><?= $each_ad['ad_name']." ".$each_ad['ad_duration']." ".date('d-m-Y', strtotime($each_ad['date']));?></div>
						<div class="channellist">
							<a class="channelname famedia" target="_blank" href='<?= $each_ad['ad_link'];?>'><?= $each_ad['fa_media'];?></a>
							<span class="channelname"><?= $each_ad['media_list'];?></span>
						</div>
						<hr />
					</div>
				</div>
			</div>
		<?php endforeach;?>
	<?php endif;?>
</div>