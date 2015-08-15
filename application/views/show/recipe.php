<div class="nw_block">
	<!-- Подключать через контроллер -->
	<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
	<!-- *************************** -->
	<div class="nw_title">
		<h2>
		<div class="nw_estimate">
			<img class="nw_button_image" title="Нравиться" src="<?php echo URL::base()."public/image/system/likes_icon.png";?>">
			<img class="nw_button_image" title="Хочу приготовить" src="<?php echo URL::base()."public/image/system/wont_prepared_icon.png";?>">
			<img class="nw_button_image" title="Уже готовил" src="<?php echo URL::base()."public/image/system/prepared_icon.png";?>">
		</div>
		<?php echo $recipes[0]['title'];?>
		</h2>
	</div>
	<div class="nw_mtitle">
		<div class="nw_autor">
			Добавил: <a href="<?php echo URL::base().'user?id='.$_SESSION['id']?>"><?php echo $recipes[0]['family']."&nbsp".$recipes[0]['name']; ?></a>
		</div>	
		<div class="nw_date">
			<?php echo $date[0];?>
		</div>
	</div>
	<div class="rc_content">
		<div class="nw_button">
			<?php if ($recipes[0]['image']!="default_image"){
				echo "<img class='nw_image' src='".URL::base()."public/image/uploads/recipe/".$recipes[0]['image']."'>";
			} ?>
		</div>
		<div class="rc_component">
			<h3>Ингридиенты</h3>
			<?php
			$i=0; 
			while (isset($comps[$i])) { ?>
			<div class="rc_component_list">
				<div class="rc_comp" align="right">
					<?php echo $comps[$i]['component'] ?>
				</div>
				<div class="rc_comp" align="left">
					<?php echo $comps[$i]['quantity'] ?>
				</div>
			</div><br>
			<?php $i++; } ?>
		</div>
		<div class="nw_content">
			<h3>Рецепт</h3>
			<?php echo $recipes[0]['recipe'];?>
		</div>
	</div>
	<div class="rc_iconlist">
		<div class="rc_icon">
			<img class="mini_icon" title="Кухня" src=<?php echo '"'.URL::base().'public/image/system/kitchens_icon.png"' ?>>&nbsp<?php echo $recipes[0]['title_k'];?> <!-- Колличество приготовивших -->
		</div>
		<div class="rc_icon">
			<img class="mini_icon" title="Количество приготовивших" src=<?php echo '"'.URL::base().'public/image/system/prepared_icon.png"' ?>>&nbsp<?php echo $recipes[0]['want_prepare'];?> <!-- Колличество приготовивших -->
		</div>
		<div class="rc_icon">
			<img class="mini_icon" title="Количество лайков" src=<?php echo '"'.URL::base().'public/image/system/likes_icon.png"' ?>>&nbsp<?php echo $recipes[0]['likes'];?> <!-- Колличество лайков -->
		</div>
		<div class="rc_icon">
			<img class="mini_icon" title="Количество порций" src=<?php echo '"'.URL::base().'public/image/system/servings_icon.png"' ?>>&nbsp<?php echo $recipes[0]['portions'];?> <!-- Колличество порций -->
		</div>
		<div class="rc_icon">
			<img class="mini_icon" title="Время приготовления" src=<?php echo '"'.URL::base().'public/image/system/time_icon.png"' ?>>&nbsp<?php echo $recipes[0]['time'];?> <!-- Время приготовления -->
		</div>
	</div>
	<div class="nw_share">
		<center>
			<div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'>
			</div>
		</center>
	</div>
</div>