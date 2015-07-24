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
			<a href=""><!-- Добавить ссылку -->
				<div class="article" title="Открыть новость">
					<div class="marticle">
						<?php echo join(' ', array_slice(explode( ' ', $news['date_added'] ), 0, 1)); ?><!-- Добавить условие: Если дата равна сегодняшней то выводило время, если не равна то дату -->
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
			<a href="">
				<div class="article" title="Открыть рецепт">
					<div class="marticle">
						23-04-2015
					</div>
					<div class="marticle">
						Жаренные херули с маслом и ...
					</div>
				</div>
			</a>
		<!-- *************** -->
		</div>
	</div>
</div>
</center>
<!-- Убрать переменную текста, имени фамилии и изображения новости -->