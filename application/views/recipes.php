<center><h2><b>Рецепты</h2>
<?php foreach($recipes as $recipe): ?>
	<div id='news'>
	<img align='left' class='image_news' src="" />
	<h4><?php echo $recipe['title']; ?></h4>
		<table id='table_news'>
			<tr>
				<td align='left'><a class='subtitle'><?php echo $recipe['family'],' '; echo $recipe['name'];  ?></a></td>
				<td align='right'><?php echo $recipe['date_added']; ?><a class='subtitle'></a></td>
			</tr>
			<tr>
				<td colspan='2'><a id='contents'><?php echo join(' ', array_slice(explode( ' ', $recipe['recipe'] ), 0, 15)); echo '..'; ?></a></br>
				<a href='<?php echo URL::base(); ?>showrecipe?id=<?php echo $recipe['id_recipe']?>'>Просмотреть полностью</a></td>
			</tr>
		</table>
	</div>
<?php endforeach; ?>
</center>