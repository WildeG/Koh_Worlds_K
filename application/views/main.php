<html>
<head>
	<!-- Иконка сайта -->
	<link href="<?php echo URL::base(); ?>public/image/system/favicon.ico" rel="shortcut icon" type="image/x-icon">

	<!-- Подключенные CSS стили -->
	<?php foreach($styles as $style): ?>
	<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css"  rel="stylesheet" type="text/css" >
	<?php endforeach; ?>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--  Шрифт иконки в меню  -->

	<!-- Скрипты для подключения карусели картинок -->
	<?php foreach($scripts as $script): ?>
	<script src="<?php echo URL::base(); ?>public/script/<?php echo $script; ?>.js"  type="text/javascript"></script>
	<?php endforeach; ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>World Kitchens</title>
		</head>
		<body>
		<div id="body">
			<div id="hat">
				<center><a href="<?php echo URL::base(); ?>main"><h1 title="Перейти на главную">World's Kitchens</h1></a></center>
			</div>
			<div id='left_panel'>
					<div id="left_bord">
						<h2 style="margin-top:0px; text-indent: 50px;">Меню</h2>	
					</div>
					<?php echo $login; ?>
			</div>
			<!--Содержимое -->
			<div id='main'>
			<?php echo $content; ?>
			<!-- Подвал -->
				<center>
				<br><br>
					<div id="copyright">
							<strong>&copy 2015. Михайлов Олег. Все права защищены.</strong>
							<p>Копирование материалов и использование их в любой форме, в том 
							числе и в электронных СМИ, возможны только с письменного разрешения 
							администрации сайта. При этом ссылка на сайт обязательна.</p>
					</div>
				</center>
			</div>  
		</div>
		</body>
</html>
<script type="text/javascript">
		// Кнопка вверх
		$(function() {
		var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;
		var links = this.el.find('.link');
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}
		Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
		$this = $(this),
		$next = $this.next();
		$next.slideToggle();
		$this.parent().toggleClass('open');
		if (!e.data.multiple) {
		$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
		}
		var accordion = new Accordion($('#accordion'), false);
		});
		$(document).ready(function(){
	$('.owl-carousel').owlCarousel();
		});
		var carousel = $("#carousel").waterwheelCarousel({
	flankingItems: 3,
	movingToCenter: function ($item) {
			$('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
	},
	movedToCenter: function ($item) {
			$('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
	},
	movingFromCenter: function ($item) {
			$('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
	},
	movedFromCenter: function ($item) {
			$('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
	},
	clickedCenter: function ($item) {
			$('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
	}
		});
</script>