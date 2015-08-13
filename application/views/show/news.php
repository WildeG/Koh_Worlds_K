<!-- Подключать через контроллер -->
<script type='text/javascript' src='//yastatic.net/share/share.js' charset='utf-8'></script>
<!-- *************************** -->

<!-- Только не забудь сделать проверку зашел ли пользователь на сайт. Если зашел то кнопки видно если нет то нет.  -->
<!-- И еще проверка стоит ли лайк у пользователя. Если стоит скажем 2 если дизлайк то 0 если ничего то 1. Ну или как то так наверно -->

<script type="text/javascript">
	$(document).ready (function () {
		$("#like").bind("click", function() {
			$.ajax ({
				url: "link.php",
				type: "POST",
				data: ({id_news: <?php echo $_GET['id']; ?>, id_user }),
				dataType: "html",
				success: funcLike
			});
		});

		$("#dislike").bind("click", function() {
			$.ajax ({
				url: "link.php",
				type: "POST",
				data: ({id_news: <?php echo $_GET['id']; ?>, id_user }),
				dataType: "html",
				success: funcDislike
			});
		});
	});

	function funcLike () {
		$("#nw_estimate").text ("Интересно");
	}

	function funcDislike () {
		$("#nw_estimate").text ("Не интересно");
	}
</script>
<div class="nw_block">
	<div class="nw_title">
			<h2>
			<div class="nw_estimate">
				<img id="like" class="nw_button_image" title="Интересно" src="<?php echo URL::base()."public/image/system/plus.png";?>">
				<img id="dislike" class="nw_button_image" title="Не интересно" src="<?php echo URL::base()."public/image/system/minus.png";?>">
			</div>
			<?php echo $newss[0]['title']; ?>
			</h2>
	</div>
	<div class="nw_mtitle"> 
		<div class="nw_autor"> Автор: <a href="<?php echo URL::base().'user?id=1';?>"><?php echo $newss[0]['family']."&nbsp".$newss[0]['name']; ?></a> </div>
		<div class="nw_date">
			<?php echo $date[0]; ?>
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