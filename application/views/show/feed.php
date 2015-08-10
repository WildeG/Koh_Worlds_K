<center>
	<div>
		<h2><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);">Новости<!-- Сделать название через переменную --><img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
		<div>
			<?php for($u=0; ;$u++){ 
				if (isset($newss[$u])) { 
					if ($u%2 == 0) {
						$align = 1;
					} else {
						$align = 2;
						}?>
						<div class="block_show">
							<a href=<?php  echo "'".URL::base()."show/news?id=".$newss[$u]['id_news']."'";?>>
								<img align='left' class=<?php echo 'mblock_image_'.$align; ?> src= <?php echo '"'.URL::base().'public/image/uploads/news/'.$newss[$u]['image'].'"' ?> />
							</a>
							<div class=<?php echo 'mblock_text_'.$align; ?>>
								<div class="mblock_title">
									<a href=<?php  echo "'".URL::base()."show/news?id=".$newss[$u]['id_news']."'";?>>
										<h3><?php echo $newss[$u]['title']; ?></h3>
									</a>
								</div>
								<div class="mblock_subtitle">
									<div class="mblock_autor">
										<a href=""><?php echo $newss[$u]['family'].' '.$newss[$u]['name']; ?></a>
									</div>
									<div class="mblock_date">
										<?php echo $newss[$u]['date_added']; ?>
									</div>
								</div>
								<div class="mblock_text">
									<?php echo join(' ', array_slice(explode( ' ', $newss[$u]['texts'] ), 0, 15)); echo '...'; ?>
								</div>
								<div class="mblock_open">
									<a href=<?php  echo "'".URL::base()."show/news?id=".$newss[$u]['id_news']."'";?>>Читать далее...</a>
								</div>
							</div>
						</div>
			<?php 	} if ($u>=5) { break; }
   			}?>
		</div>
		<div class="pages">
			<?php echo $pages; ?>
		</div>
	</div>
</center>