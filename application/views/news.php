<?php foreach($newss as $news): ?>
<center><h2><b>Новости</h2><div id='news'>
<img align='left' class='image_news' src="" />
<h4><?php echo $news['title']; ?></h4>
<table id='table_news'>
	<tr>
		<td align='left'><a class='subtitle'><?php echo $news['id_autors'];  ?></a></td>
		<td align='right'><?php echo $news['date_added']; ?><a class='subtitle'></a></td>
	</tr>
	<tr>
		<td colspan='2'><a id='contents'><?php echo join(' ', array_slice(explode( ' ', $news['texts'] ), 0, 15)); echo '..'; ?></a></td>
	</tr>
</table>
</div></center>
<?php endforeach; ?>