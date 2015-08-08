<div>
	<!-- Подключать через контроллер -->
	<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
	<!-- *************************** -->
	<div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'>
	</div>
	<h2><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);"><?php echo $recipes[0]['title'];?><img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
	<div>
		<div>
			Добавил: <?php echo $recipes[0]['family']."&nbsp".$recipes[0]['name']; ?>
		</div>	
		<div>
			<?php
			if (substr($recipes[0]['date_added'],0,10)!==date("Y-m-d")) {
				if (date('Y-m-d', strtotime('yesterday'))==substr($recipes[0]['date_added'],0,10)) {
					echo "Вчера в ".substr(substr($recipes[0]['date_added'],11,8),0,5);
				} else {
					$date = explode(".", date("d.m.Y",strtotime($recipes[0]['date_added'])));
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
					echo $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2].date(' в G:i', strtotime($recipes[0]['date_added']));
				}
			} else {
			 	echo "Сегодня в ".substr(substr($recipes[0]['date_added'],11,8),0,5);
			}
			?>
		</div>
	</div>
	<div>
		<div>
			<h3>Ингридиенты</h3>
			<?php
			$i=0; 
			while (isset($comps[$i])) { ?>
			<div>
				<div>
					<?php echo $comps[$i]['component'] ?>
				</div>
				<div>
					<?php echo $comps[$i]['quantity'] ?>
				</div>
			</div>
			<?php $i++; } ?>
		</div>
		<div>
			<?php if ($recipes[0]['image']!="default_image"){
				echo "<img class='image_recipe' width=80 height=80 src='".URL::base()."public/image/uploads/recipe/".$recipes[0]['image']."'>";
			} ?>
			<div>
				
			</div>
		</div>
	</div>
	<div>
		<div class="show_icon">
			<img class="mini_icon" title="Кухня" src=<?php echo '"'.URL::base().'public/image/system/kitchens_icon.png"' ?>>&nbspРусская <!-- Колличество приготовивших -->
		</div>
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
	<div>
		<h3>Рецепт</h3>
		<div>
			<?php echo $recipes[0]['recipe'];?>
		</div>
	</div>
</div>