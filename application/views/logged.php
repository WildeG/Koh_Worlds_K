<div>
	<ul id="accordion" class="accordion">
	<li>
		<div class="link">Добавить<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		<?php echo $roles ?>
			<li><a href='<?php echo URL::base(); ?>add/recipe'>Рецепт</a></li>

		</ul>
	</li>
	<li>
		<div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		<?php foreach ($kitchens as $kitchen): ?>
		<li><a href="<?php echo URL::base(); ?>showrecipes?kitchens=<?php echo $kitchen['id']; ?>&page=0"><?php echo $kitchen['title']; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</li>
	<!-- <li> 
		<a href="#"><div class="link" style="padding-left:10px;">Поиск</div></a>
	</li>-->
	<li>
		<a href='<?php echo URL::base(); ?>menu_day'><div class="link" style="padding-left:10px;">Меню дня</div></a>
	</li>
	<li>
		<a href='<?php echo URL::base(); ?>newslist?page=0'><div class="link" style="padding-left:10px;">Новости</div></a>
	</li>
	<li>
		<div class="link">Избранное<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href='<?php echo URL::base(); ?>favorite/wantcook'>Хочу приготовить</a></li> 
			<li><a href='<?php echo URL::base(); ?>favorite/prepared'>Уже готовил</a></li>
			<li><a href='<?php echo URL::base(); ?>favorite/myrecipes'>Мои рецепты</a></li>
		</ul>
	</li>
	</ul>
</div>
<div id='user'><center>
	<?php echo "Вы зашли как<br><h3><a href='".URL::base()."user' title='Редактировать информацию о себе'>".$_SESSION['family']." ".$_SESSION['name']."</a></h3>"?>
	<a href='<?php echo URL::base(); ?>logout' >(Выход)</a></center>
</div>