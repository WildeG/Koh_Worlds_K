<center>
	<div class="adv_block">
		<h2><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);">Советы<img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
		<?php for($u=0; ;$u++){ 
				if (isset($adv[$u])) { ?>
			<div class="adv_mblock">
				<div class="adv_title">
					<div class="adv_mtitle">
						<?php echo $date[$u]; ?>
					</div>
					<div class="adv_mtitle">
						<div class="m_stat" title="Не понравилось">
							<img class="mini_icon" src=<?php echo '"'.URL::base().'public/image/system/minus.png"' ?>><?php echo $adv[$u]['likes'];?>
						</div>
						<div class="m_stat" title="Понравилось">
							<img class="mini_icon" src=<?php echo '"'.URL::base().'public/image/system/plus.png"' ?>><?php echo $adv[$u]['dislikes'];?>
						</div>
					</div>
				</div>
				<div class="adv_text">
					<div class="adv_mltext">
						<a href='<?php echo URL::base(); ?>user?id=<?php echo $adv[$u]['id_autors'];?>'><?php echo $adv[$u]['name'].' '.$adv[$u]['family']; ?>:</a><?php echo substr($adv[$u]['advice'],0,10); ?>
					</div>
					<div class="adv_mrtext">
						<a href="<?php echo URL::base(); ?>show/advice?id=<?php echo $adv[$u]['id_advice'];?>">Читать далее...</a>
					</div>
				</div>
			</div>
		<?php 	} else{ break; }
   			}?>
   			<?php echo $pages; ?>
	</div>
</center>