<center>
	<?php echo "<a class='inscriptions'>".$newss[0]['title']."</a>"; 
	if ($newss[0]['image']!="default_image"){
		echo "<img class='image_recipe' width=80 height=80 src='".URL::base()."public/image/uploads/news/".$newss[0]['image']."'>";
	}
	?>
	<div class="show">
	<h3>Новость</h3>
	<?php echo $newss[0]['texts'];?>
	</div>
	<?php if (Auth::instance()->logged_in()) { ?>
	Мне нравится
	<?php } ?>
	<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
	<div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'>
	</div>
</center>