<center>
	<div class="show_block">
		<h2><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);"><?php echo $kitchen[0]['title_k']." кухня"; ?><img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
		<?php for($u=0; ;$u++){ if (isset($recipes[$u])){ ?>
		<div class="show_mblock">
			<div >
				<a style='display:block;' href=<?php  echo "'".URL::base()."show/recipe?id=".$recipes[$u]['id_recipe']."'";?>><img class="show_image" src=<?php echo '"'.URL::base().'public/image/uploads/recipe/'.$recipes[$u]['image'].'"' ?>></a>
			</div>
			<div class="show_text">
				<div class="show_title">
					<a href=<?php  echo "'".URL::base()."show/recipe?id=".$recipes[$u]['id_recipe']."'";?>><h2><?php echo $recipes[$u]['title']; ?></h2></a>
				</div>
				<div class="show_mtitle">
					<div class="show_name">
						Добавил:&nbsp<a href=<?php echo "'".URL::base()."user?id=".$recipes[$u]['id']."'";?>> <?php echo $recipes[$u]['family'],' '; echo $recipes[$u]['name']; ?> </a> <!-- Добавить ссылку на страницу пользователя -->
					</div>
					<div class="show_date">
						<?php echo $date[$u];?>
					</div>
				</div>
				<div class="show_text_r">
					<div>
						<?php 
						$string = rtrim(substr($recipes[$u]['recipe'], 0, 300), "!,.-");
						$string = substr($string, 0, strrpos($string, ' '));
						echo $string.'...'; 
						?>
					</div>
					<div align="right">
						<a href=<?php  echo "'".URL::base()."show/recipe?id=".$recipes[$u]['id_recipe']."'";?>>Читать далее...</a>
					</div>
				</div>
				<div class="show_basement">
					<div class="show_icon">
						<img class="mini_icon" title="Количество приготовивших" src=<?php echo '"'.URL::base().'public/image/system/prepared_icon.png"' ?>>&nbsp<?php echo $recipes[$u]['prepare']; ?> <!-- Колличество приготовивших -->
					</div>
					<div class="show_icon">
						<img class="mini_icon" title="Количество лайков" src=<?php echo '"'.URL::base().'public/image/system/likes_icon.png"' ?>>&nbsp<?php echo $recipes[$u]['likes']; ?> <!-- Колличество лайков -->
					</div>
					<div class="show_icon">
						<img class="mini_icon" title="Количество порций" src=<?php echo '"'.URL::base().'public/image/system/servings_icon.png"' ?>>&nbsp<?php echo $recipes[$u]['portions']; ?> <!-- Колличество порций -->
					</div>
					<div class="show_icon">
						<img class="mini_icon" title="Время приготовления" src=<?php echo '"'.URL::base().'public/image/system/time_icon.png"' ?>>&nbsp<?php echo $recipes[$u]['time']; ?> <!-- Время приготовления -->
					</div>
				</div>
			</div>
		</div>
		<?php } else {break;}
		} ?>
	</div><?php echo $pages;?>
</center>