<center>
	<div>
		<?php if (empty($_GET['category'])) {
				$category = 2;
			} else if (($_GET['category']>3)||(substr_count($_GET['category'],"-"))||(!is_numeric($_GET['category']))) {
						$category =  2;
					} else {
							$category = $_GET['category'];
						}
			?>
		<h2>Меню дня</h2>
		<a id="1c" href="<?php echo URL::base(); ?>menu_day?category=1" class="mday_inscriptions_min">I Категория</a><big class="mday_inscriptions_min">|</big>
		<a id="2c" href="<?php echo URL::base(); ?>menu_day?category=2" class="mday_inscriptions_min">II Категория</a><big class="mday_inscriptions_min">|</big>
		<a id="3c" href="<?php echo URL::base(); ?>menu_day?category=3" class="mday_inscriptions_min">III Категория</a>
		<div>
			<div class="mday_block">
				<a href="" class="mday_link">
					<div class="mday_mblock">
						<div class="mday_blok_left">
							З<br>а<br>в<br>т<br>р<br>а<br>к
						</div>
						<img src="<?php echo URL::base(); ?>public/image/system/logo-3.png" class="mday_image">
						<div class="mday_text">
							<h2> Название </h2>
							<div class="mday_text_title">
								Время приготовления:<br>
								Кол-во ингридиентов:<br>
								Кол-во порций:<br>
								Кухня:
							</div>
							<div class="mday_text_variables">
								25 мин.<br>
								7<br>
								4<br>
								Русская
							</div>
						</div>
					</div>
				</a>
				<a href="" class="mday_link">
					<div class="mday_mblock">
						<div class="mday_blok_left" style="padding-top: 45px; height: 155px;">
							О<br>б<br>е<br>д
						</div>
						<div class="mday_text">
							<h2> Название </h2>
							<div class="mday_text_title">
								Время приготовления:<br>
								Кол-во ингридиентов:<br>
								Кол-во порций:<br>
								Кухня:
							</div>
							<div class="mday_text_variables">
								25 мин.<br>
								7<br>
								4<br>
								Русская
							</div>
						</div>
						<img src="<?php echo URL::base(); ?>public/image/system/logo-3.png" class="mday_image">
					</div>
				</a>
				<a href="" class="mday_link">
					<div class="mday_mblock">
						<div class="mday_blok_left" style="padding-top: 55px; height: 145px;">
							У<br>ж<br>и<br>н
						</div>
						<img src="<?php echo URL::base(); ?>public/image/system/logo-3.png" class="mday_image">
						<div class="mday_text">
							<h2> Название </h2>
							<div class="mday_text_title">
								Время приготовления:<br>
								Кол-во ингридиентов:<br>
								Кол-во порций:<br>
								Кухня:
							</div>
							<div class="mday_text_variables">
								25 мин.<br>
								7<br>
								4<br>
								Русская
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</center>
<script type="text/javascript">
	$(document).ready(function(){
		$("#<?php echo $category; ?>c").css('color', '#fff');
		$("#<?php echo $category; ?>c").css('background', 'rgba(230,0,0,0.8)');
	});
</script>