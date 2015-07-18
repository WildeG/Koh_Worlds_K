<center>
<br>
	<div class="blok" align="left" style="padding: 20px;">
		<h2 style="margin-top:0px;"><?php echo $_SESSION['name'].' '.$_SESSION['family'];?></h2>
		<a class="inscriptions">Информация</a><br>
		<table>
			<tr><td>Статус:</td><td>"Админ"</td></tr>
			<tr><td>Дата регистрации:</td><td></td></tr>
			<tr><td>Колличество приготовленных блюд:</td><td></td></tr>
			<tr><td>Кол-во добавленных рецептов:</td><td><?php echo $recipes; ?></td></tr>
			<tr><td>Колличество интересующих блюд:</td><td></td></tr>
			<tr><td>Колличество подписчиков:</td><td></td></tr>
		</table>
	</div>
</center>