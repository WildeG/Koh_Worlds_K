<center>
	<?php echo "<br><a class='inscriptions'>".$recipes[0]['title']."</a>"; 
	if ($recipes[0]['image']!="default_image"){
		echo "<img class='image_recipe' width=80 height=80 src='".URL::base()."public/image/uploads/recipe/".$recipes[0]['image']."'>";
	}
	echo "<br><table id='table_news'>
				<tr>
					<td align='left'><a class='inscriptions_min'>".$recipes[0]['family']."&nbsp".$recipes[0]['name']."</a></td>
					<td align='right'><a class='inscriptions_min'>".$recipes[0]['date_added']."</a></td>
				</tr>
			</table>";?>
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
	Мне нравится
	<a href='/add/add_favor?id=<?php echo $_GET['id'];?>'>Хочу приготовить</a>
	Приготовил
	<p>
	<?php } if (($_GET['id']-1)>0) {
		echo "<a class='button' href='".URL::base()."showrecipe?id=".($_GET['id']-1)."'><b><</b>&nbspПредыдущий</a>";
	} echo "<a class='button' href='".URL::base()."showrecipes?kitchens=".$recipes[0]['kitchens']."&page=0'>Вернуться к списку рецептов</a>
	<a class='button' href='".URL::base()."showrecipe?id=".($_GET['id']+1)."'>Следующий&nbsp<b>></b></a></p>";?>
	<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
	<div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'>
	</div>
</center>
<b style="text-align:left;"></b>