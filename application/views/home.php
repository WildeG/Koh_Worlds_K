<center><h2 style="margin-top:0px;"><b><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);">&nbspМеню дня&nbsp<img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
<div id="carousel">
	<img src="<?php echo URL::base(); ?>public/image/countries/001.jpg" id="item-1" />
	<img src="<?php echo URL::base(); ?>public/image/countries/002.jpg" id="item-2" />
	<img src="<?php echo URL::base(); ?>public/image/countries/003.jpg" id="item-3" />
	<img src="<?php echo URL::base(); ?>public/image/countries/004.jpg" id="item-4" />
</div>
<a href='<?php echo URL::base(); ?>newslist?page=0'><h2><b><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);">&nbspНовости&nbsp<img src="<?php echo URL::base(); ?>public/image/system/h.png"></b></h2></a>
<?php foreach($newss as $news): ?>
	<div id='news'>
	<img align='left' class='image_news' src=<?php echo '"'.URL::base().'public/image/uploads/news/'.$news['image'].'"' ?> />
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