<center>
	<div class="show_block">
		<h2><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);"><?php echo $kitchen[0]['title_k']." кухня"; ?><img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
		<?php for($u=0; ;$u++){ if (isset($recipes[$u])){ ?>
		<div class="show_mblock">
			<div>
				<a href=<?php  echo "'".URL::base()."show/recipe?id=".$recipes[$u]['id_recipe']."'";?>><img class="show_image" src=<?php echo '"'.URL::base().'public/image/uploads/recipe/'.$recipes[$u]['image'].'"' ?>></a>
			</div>
			<div class="show_text">
				<div class="show_title">
					<a href=<?php  echo "'".URL::base()."show/recipe?id=".$recipes[$u]['id_recipe']."'";?>><h2><?php echo $recipes[$u]['title']; ?></h2></a>
				</div>
				<div class="show_mtitle">
					<div class="show_name">
						Добавил:&nbsp<a href=""> <?php echo $recipes[$u]['family'],' '; echo $recipes[$u]['name']; ?> </a> <!-- Добавить ссылку на страницу пользователя -->
					</div>
					<div class="show_date">
						<?php
						if (substr($recipes[$u]['date_added'],0,10)!==date("Y-m-d")) {
							if (date('Y-m-d', strtotime('yesterday'))==substr($recipes[$u]['date_added'],0,10)) {
								echo "Вчера в ".substr(substr($recipes[$u]['date_added'],11,8),0,5);
							} else {
								$date = explode(".", date("d.m.Y",strtotime($recipes[$u]['date_added'])));
								switch ($date[1]){
									case 1: $m='января'; break;
									case 2: $m='февраля'; break;
									case 3: $m='марта'; break;
									case 4: $m='апреля'; break;
									case 5: $m='мая'; break;
									case 6: $m='июня'; break;
									case 7: $m='июля'; break;
									case 8: $m='августа'; break;
									case 9: $m='сентября'; break;
									case 10: $m='октября'; break;
									case 11: $m='ноября'; break;
									case 12: $m='декабря'; break;
								}
								echo $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2].date(' в G:i', strtotime($recipes[$u]['date_added']));
							}
						} else {
						 	echo "Сегодня в ".substr(substr($recipes[$u]['date_added'],11,8),0,5);
						}
						?>
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
						<img class="mini_icon" title="Колличество приготовивших" src=<?php echo '"'.URL::base().'public/image/system/prepared_icon.png"' ?>>&nbsp13 <!-- Колличество приготовивших -->
					</div>
					<div class="show_icon">
						<img class="mini_icon" title="Колличество лайков" src=<?php echo '"'.URL::base().'public/image/system/likes_icon.png"' ?>>&nbsp13 <!-- Колличество лайков -->
					</div>
					<div class="show_icon">
						<img class="mini_icon" title="Колличество порций" src=<?php echo '"'.URL::base().'public/image/system/servings_icon.png"' ?>>&nbsp13 <!-- Колличество порций -->
					</div>
					<div class="show_icon">
						<img class="mini_icon" title="Время приготовления" src=<?php echo '"'.URL::base().'public/image/system/time_icon.png"' ?>>&nbsp13 <!-- Время приготовления -->
					</div>
				</div>
			</div>
		</div>
		<?php } if($u>=5){break;}
		} ?>
	</div><?php echo $pages;?>
</center>