<center>
<h2 style="margin-top:0px;"><img src="<?php echo URL::base(); ?>public/image/system/h.png" style="transform: scale(-1, 1);">&nbspМеню дня&nbsp<img src="<?php echo URL::base(); ?>public/image/system/h.png"></h2>
<div id="carousel">
	<img src="<?php echo URL::base(); ?>public/image/countries/001.jpg" id="item-1" />
	<img src="<?php echo URL::base(); ?>public/image/countries/002.jpg" id="item-2" />
	<img src="<?php echo URL::base(); ?>public/image/countries/003.jpg" id="item-3" />
	<img src="<?php echo URL::base(); ?>public/image/countries/004.jpg" id="item-4" />
</div>
<div class="block">
	<div class="mblock">
		<div class="block_title" title="Перейти к новостям">
			<a href='<?php echo URL::base(); ?>newslist?page=0'><h2>Новости</h2></a>
		</div>
		<div>
		<!-- Запихать в цикл так же и новости -->
		<?php foreach($newss as $news): ?>
			<a href=<?php echo '"'.URL::base().'shownews?id='.$news['id_news'].'"';  ?>>
				<div class="article" title="Открыть новость">
					<div class="marticle">
						<?php echo join(' ', array_slice(explode( ' ', $news['date_added'] ), 0, 1)); ?>
					</div>
					<div class="marticle">
						<?php echo $news['title']; ?>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
		<!-- *************** -->
		</div>
	</div>
	<div class="mblock">
		<div class="block_title" title="Перейти к рецептам">
			<a href='<?php echo URL::base(); ?>showrecipes?kitchens=1&page=0'><h2>Рецепты</h2></a>
		</div>
		<div>
		<!-- Запихать в цикл -->
		<?php foreach($recipes as $recipe): ?>
			<a href=<?php echo '"'.URL::base().'showrecipe?id='.$recipe['id_recipe'].'"';  ?>>
				<div class="article" title="Открыть рецепт">
					<div class="marticle">
						<?php echo join(' ', array_slice(explode( ' ', $recipe['date_added'] ), 0, 1)); ?>
					</div>
					<div class="marticle">
						<?php echo $recipe['title']; ?>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
		</div>
	</div>
</div>
</center>
<!-- Убрать переменную текста, имени фамилии и изображения новости -->