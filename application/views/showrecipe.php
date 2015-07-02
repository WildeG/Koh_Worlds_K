<center>
	<?php echo "<a class='inscriptions'>".$recipes[0]['title']."</a>"; 
	if ($recipes[0]['image']!="default_image"){
		echo "<img class='image_recipe' src='".$recipes[0]['image']."'>";
	}
	?>
	<div class="show">
		<h3>Ингридиенты</h3>
		<?php
		$i=0; 
		while (isset($comps[$i])){
		echo $comps[$i]['component'].' '.$comps[$i]['quantity'].'</br>';
		$i++;}?>
	</div>
	<div class="show">
	<h3>Рецепт</h3>
	<?php echo $recipes[0]['recipe'];?>
	</div>
	<?php if (Auth::instance()->logged_in()) { ?>
	Мне нравиться
	Хочу приготовить
	Приготовил
	<?php } ?>
	<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
	<div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'>
	</div>
</center>