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
			<?php
			if (substr($newss[0]['date_added'],0,10)!==date("Y-m-d")) {
				if (date('Y-m-d', strtotime('yesterday'))==substr($newss[0]['date_added'],0,10)) {
					echo "Вчера в ".substr(substr($newss[0]['date_added'],11,8),0,5);
				} else {
					$date = explode(".", date("d.m.Y",strtotime($newss[0]['date_added'])));
					switch ($date[1]){
						case 1: $m='января'; break;
						case 2: $m='февраля'; break;
						case 3: $m='марта'; break;
						case 4: $m='апреля'; break;
						case 5: $m='мая'; break;
						case 6: $m='июня'; break;
						case 7: $m='июля'; break;
						case 8: $m='августа'; break;
						case 9: $m='сентября'; break;
						case 10: $m='октября'; break;
						case 11: $m='ноября'; break;
						case 12: $m='декабря'; break;
					}
					echo $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2].date(' в G:i', strtotime($newss[0]['date_added']));
				}
			} else {
			 	echo "Сегодня в ".substr(substr($newss[0]['date_added'],11,8),0,5);
			}
			?>
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