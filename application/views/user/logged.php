<div>
	<ul id="accordion" class="accordion">
	<li>
		<div class="link" id="up_menu">Добавить<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		<?php echo $roles; ?>
			<li><a href='<?php echo URL::base(); ?>add/recipe'>Рецепт</a></li>
			<li><a href="<?php echo URL::base(); ?>add/advice">Совет</a></li>
		</ul>
	</li>
	<li>
		<div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		<?php foreach ($kitchens as $kitchen): ?>
		<li><a href="<?php echo URL::base(); ?>show/recipes?kitchens=<?php echo $kitchen['id']; ?>&page=0"><?php echo $kitchen['title_k']; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</li>
	<li>
		<a style='display:block;margin-top:0px;margin-bottom:0px' href='<?php echo URL::base(); ?>show/advice'><div class="link" style="padding-left:10px;">Советы</div></a>
	</li>
	<!-- <li> 
		<a href="#"><div class="link" style="padding-left:10px;">Поиск</div></a>
	</li>-->
	<li>
		<a style='display:block;margin-top:0px;margin-bottom:0px' href='<?php echo URL::base(); ?>show/menu_day?category=2'><div class="link" style="padding-left:10px;">Меню дня</div></a>
	</li>
	<li>
		<a style='display:block;margin-top:0px;margin-bottom:0px' href='<?php echo URL::base(); ?>show/feed?page=0'><div class="link" style="padding-left:10px;">Новости</div></a>
	</li>
	<li>
		<div class="link">Избранное<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href='<?php echo URL::base(); ?>user/wantcook?page=0'>Хочу приготовить</a></li> 
			<li><a href='<?php echo URL::base(); ?>user/myrecipes'>Интересные советы</a></li>
			<li><a href='<?php echo URL::base(); ?>user/myrecipes'>Мои подписки</a></li>
		</ul>
	</li>
	</ul>
</div>
<div id='user'><center>
	<?php echo "Вы зашли как<br><h3><a href='".URL::base()."user?id=".$_SESSION['id']."' title='Редактировать информацию о себе'>".$_SESSION['family']." ".$_SESSION['name']."</a></h3>"?>
	<a href='<?php echo URL::base(); ?>logout' >(Выход)</a></center>
</div>