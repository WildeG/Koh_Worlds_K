<!-- Подключать через контроллер -->
<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
<!-- *************************** -->
<div class="nw_block">
	<div class="nw_title">
			<h2>
			<div class="nw_estimate">
				<img class="nw_button_image" title="Интересно" src="<?php echo URL::base()."public/image/system/plus.png";?>">
				<img class="nw_button_image" title="Не интересно" src="<?php echo URL::base()."public/image/system/minus.png";?>">
			</div>
			<?php echo $newss[0]['title']; ?>
			</h2>
	</div>
	<div class="nw_mtitle"> 
		<div class="nw_autor"> Автор: <a href="<?php echo URL::base().'user?id=1';?>"><?php echo $newss[0]['family']."&nbsp".$newss[0]['name']; ?></a> </div>
		<div class="nw_date">
			<?php	echo $date[0];		?>
		</div>
	</div>
	<div class="nw_content">
		<div class="nw_button">
			<?php if ($newss[0]['image']!="default_image.jpg"){
			echo "<img class='nw_image' src='".URL::base()."public/image/uploads/news/".$newss[0]['image']."'>";
			} ?>
		</div>
		<?php echo $newss[0]['texts']; ?>
		<div class="nw_share">
			<center>
				<div class='yashare-auto-init' data-yashareL10n='ru' data-yashareType='small' data-yashareQuickServices='vkontakte,facebook,twitter,odnoklassniki,moimir,gplus' data-yashareTheme='counter' data-yashareImage='http://wildegard.com/image/recipe/3e551df3a8276c3b50bf.jpg'>
				</div>
			</center>
		</div>
	</div>
</div>