<?php
	$program_type = '';
?>
<div class="content-wrapper">
	<div class="producttype-wrapper">
		<?php if(count($branded_progs) == 0) : ?>
			<div class="producttype-wrapper">
				<div class="message-no"><?= 'No New Brandings';?></div>
			</div>
		<?php else : ?>
			<?php foreach ($branded_progs as $each_prog) : ?>
				<?php if($each_prog['program_type'] != $program_type) : ?>
					<div class="producttype"><?= $each_prog['program_type'];?></div>

					<?php $program_type = $each_prog['program_type'];?>
				<?php endif;?>
				<div class="companyname-wrapper">
					<div class="adname-wrapper">
						<div class="adnamestyle"><?= $each_prog['program_name']."_".$each_prog['fa_media']."_".date('d-m-Y' ,strtotime($each_prog['date']));?></div>
						<div class="programname-wrapper">
							<span class="launchingdatetime"><?= "Branded By: ".$each_prog['branded_by'];?></span>
						</div>
						<hr />
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif;?>
	</div>
</div>