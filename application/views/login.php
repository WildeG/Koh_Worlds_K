<div>
	<ul id="accordion" class="accordion">
	<li>
		<div class="link">Кухни<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
		<?php foreach ($kitchens as $kitchen): ?>
		<li><a href="<?php echo URL::base(); ?>kitchens=<?php echo $kitchen['title']; ?>"><?php echo $kitchen['title']; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</li>
	<li>
		<div class="link"><a href="#">Блюда</a></div>
	</li>
	<li>
		<div class="link"><a href="#">Поиск</a></div>
	</li>
	<li>
		<div class="link"><a href="#">Блюдо дня</a></div>
	</li>
	<li>
		<div class="link"><a href="#">Новости</a></div>
	</li>
	</ul>
</div>
<div id='user'>
	<form method='post' action='login'>
		<table>
			<tr>
				<td colspan='2'><input type='text' class='verification' size='25' maxlength='25' placeholder='Логин' name='username'></td>
			</tr>
			<tr>
				<td colspan='2'><input type='password' class='verification' size='25' maxlength='25' placeholder='Пароль' name='password'></td>
			</tr>
			<tr>
				<td><input type='submit' name='submit' class='button' value='Вход'></td>
				<td><a href='registration'><input type='button' class='button' value='Регистрация'></a></td>
			</tr>              
		</table>
	</form>
</div>