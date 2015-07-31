<div>
	<ul id="accordion" class="accordion">
	<li>
		<div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		<?php foreach ($kitchens as $kitchen): ?>
		<li><a href="<?php echo URL::base(); ?>show/recipes?kitchens=<?php echo $kitchen['id']; ?>&page=0"><?php echo $kitchen['title_k']; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</li>
	<!-- <li>
		<div class="link"><a href="#">Поиск</a></div>
	</li> -->
	<li>
		<div class="link"><a href="<?php echo URL::base(); ?>show/menu_day?category=2">Меню дня</a></div>
		<div class="link"><a href='<?php echo URL::base(); ?>show/feed?page=0'>Новости</a></div>
	</li>
	</ul>
</div>
<div id='user'>
	<form method='post' action='<?php echo URL::base(); ?>login'>
		<h4>Вход</h4>
		<input type='text' class='login_verification' maxlength='25' placeholder='Логин' name='username'>
		<input type='password' class='login_verification' maxlength='25' placeholder='Пароль' name='password'>
		<center><input type='submit' name='submit' class='login_button' value='Вход'></center>
	</form>
</div>
<div class="login_link">
	<center>
		
		<a href='<?php echo URL::base(); ?>registration' >Перейти к регистрации</a>
	</center>
</div>