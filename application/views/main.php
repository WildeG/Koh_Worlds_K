<html>
<head>
	<!-- Иконки сайта -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL::base(); ?>public/image/system/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo URL::base(); ?>public/image/system/manifest.json">
	<meta name="msapplication-TileColor" content="#ff0101">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#f72424">

	<!-- Виджет для визуальных закладок -->
	<link rel="yandex-tableau-widget" href="<?php echo URL::base(); ?>public/script/widget.json" />

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