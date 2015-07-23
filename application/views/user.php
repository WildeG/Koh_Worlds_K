<center>
<br>
	<div class="blok" align="left" style="padding: 20px;">
		<h2 style="margin-top:0px;"><?php echo $user[0]['name'].' '.$user[0]['family'];?></h2>
		<a class="inscriptions">Информация</a><br>
		<table>
		    <tr><td>ID:</td><td><?php echo $user[0]['id'];?></td></tr>
			<tr><td>Статус:</td><td><?php echo $user[0]['role_id'];?></td></tr>
			<tr><td>Дата регистрации:</td><td><?php echo $user[0]['dateofreg'];?></td></tr>
			<tr><td>Колличество приготовленных блюд:</td><td></td></tr>
			<tr><td>Кол-во добавленных рецептов:</td><td><?php echo $recipes; ?></td></tr>
			<tr><td>Количество интересующих блюд:</td><td></td></tr>
			<tr><td>Количество подписчиков:</td><td></td></tr>
		</table>
		<?php if ($_SESSION('id')=$_GET('id')) {
				echo "<a href='<?php echo URL::base(); ?>favorite/myrecipes'>Мои рецепты</a></li> | <a href='<?php echo URL::base(); ?>favorite/advice'>Мои советы</a></li> | <a href='<?php echo URL::base(); ?>favorite/prepared'>Приготовленные</a></li>";
			} else {
					echo "Рецепты ".$user[0]['name'].' '.$user[0]['family']." | Советы ".$user[0]['name'].' '.$user[0]['family']." | ".$user[0]['name'].' '.$user[0]['family']."приготовил";
				} ?>
	</div>
</center>