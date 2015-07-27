<center>
<br>
	<div class="blok" align="left" style="padding: 20px;">
		<h2 style="margin-top:0px;"><?php echo $user[0]['name'].' '.$user[0]['family'];?></h2>
		<a class="inscriptions">Информация</a><br>
		<table>
		    <tr><td>ID:</td><td><?php echo $user[0]['id'];?></td></tr>
			<tr><td>Статус:</td><td><?php 
			$i=0;
			while (isset($roles[$i])){
			echo $roles[$i]['name'].' ';
			$i++;}
			?></td></tr>
			<tr><td>Дата регистрации:</td><td><?php echo $user[0]['dateofreg'];?></td></tr>
			<tr><td>Количество приготовленных блюд:</td><td><?php echo $alrdprep; ?></td></tr>
			<tr><td>Кол-во добавленных рецептов:</td><td><?php echo $recipes; ?></td></tr>
			<tr><td>Количество интересующих блюд:</td><td><?php echo $want_prep; ?></td></tr>
			<tr><td>Количество подписчиков:</td><td><?php echo $subs; ?></td></tr>
		</table>
		<?php echo $my;?>
	</div>
</center>