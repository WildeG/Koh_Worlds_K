<center><h2 style="margin-top:0px;"><b>Кухни</h2>
<div id="carousel">
	<img src="<?php echo URL::base(); ?>public/image/countries/001.jpg" id="item-1" />
	<img src="<?php echo URL::base(); ?>public/image/countries/002.jpg" id="item-2" />
	<img src="<?php echo URL::base(); ?>public/image/countries/003.jpg" id="item-3" />
	<img src="<?php echo URL::base(); ?>public/image/countries/004.jpg" id="item-4" />
</div>
<h2><b>Новости</h2>
<?php foreach($newss as $news): ?>
	<div id='news'>
	<img align='left' class='image_news' src="" />
	<h4><?php echo $news['title']; ?></h4>
		<table id='table_news'>
			<tr>
				<td align='left'><a class='subtitle'><?php echo $news['family'],' '; echo $news['name'];  ?></a></td>
				<td align='right'><?php echo $news['date_added']; ?><a class='subtitle'></a></td>
			</tr>
			<tr>
				<td colspan='2'><a id='contents'><?php echo join(' ', array_slice(explode( ' ', $news['texts'] ), 0, 15)); echo '..'; ?></a></td>
			</tr>
		</table>
	</div>
<?php endforeach; ?>
</center>